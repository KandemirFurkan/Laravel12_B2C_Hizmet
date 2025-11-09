<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use App\Models\Blog;
use App\Models\Admin;
use RuntimeException;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Requests\Admin\SliderStoreRequest;
use App\Http\Requests\Admin\SliderUpdateRequest;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;

class DashboardController extends Controller
{
    public function login(Request $request): View|RedirectResponse
    {
        if ($request->session()->has('admin_id')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.pages.login');
    }

    public function authenticate(AdminLoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        $admin = Admin::query()
            ->where('username', $credentials['username'])
            ->first();

        if (! $admin || ! Hash::check($credentials['password'], $admin->password)) {
            return response()->json([
                'message' => 'Kullanıcı adı veya şifre hatalı.',
                'errors' => [
                    'username' => ['Kullanıcı adı veya şifre hatalı.'],
                ],
            ], 422);
        }

        $request->session()->regenerate();
        $request->session()->put('admin_id', $admin->id);
        $request->session()->put('admin_username', $admin->username);

        return response()->json([
            'message' => 'Giriş başarılı.',
            'redirect' => route('admin.dashboard'),
        ]);
    }

    public function dashboard(Request $request): View|RedirectResponse
    {
        if (! $request->session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.pages.dashboard');
    }

    public function sliders(): View
    {
        $sliders = Slider::query()
            ->orderBy('display_order')
            ->orderByDesc('id')
            ->paginate(6);

        return view('admin.pages.slider', compact('sliders'));
    }

    public function slider_store(SliderStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $uploadPath = public_path('uploads/slider');
        $thumbnailPath = public_path('uploads/slider/thumbs');

        File::ensureDirectoryExists($uploadPath);
        File::ensureDirectoryExists($thumbnailPath);

        $imageFile = $request->file('image');
        $extension = strtolower($imageFile->getClientOriginalExtension());
        $fileName = Str::uuid()->toString().'.'.$extension;

        $storedOriginalPath = $uploadPath.DIRECTORY_SEPARATOR.$fileName;
        $storedThumbnailPath = $thumbnailPath.DIRECTORY_SEPARATOR.'thumb-'.$fileName;

        $thumbnailRelativePath = 'uploads/slider/thumbs/thumb-'.$fileName;

        try {
            $imageFile->move($uploadPath, $fileName);

            $this->generateThumbnail($storedOriginalPath, $storedThumbnailPath, $extension, 200, 200);

            Slider::create([
                'title' => $data['title'],
                'subtitle' => $data['description'],
                'image' => 'uploads/slider/'.$fileName,
                'display_order' => $data['order'] ?? 1,
                'thumbnail' => $thumbnailRelativePath,
                'status' => $data['status'] === 'active',
            ]);
        } catch (Throwable $exception) {
            if (File::exists($storedOriginalPath)) {
                File::delete($storedOriginalPath);
            }

            if (File::exists($storedThumbnailPath)) {
                File::delete($storedThumbnailPath);
            }

            report($exception);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Slider kaydedilirken bir hata oluştu.');
        }

        return redirect()
            ->route('admin.sliders')
            ->with('success', 'Slider başarıyla kaydedildi.');
    }

    public function slider_add(): View
    {
        return view('admin.pages.slider_add');
    }

    public function slider_edit($id): View
    {
        $slider = Slider::find($id);

        return view('admin.pages.slider_edit', compact('slider'));
    }

    public function slider_destroy($id): RedirectResponse
    {
        $slider = Slider::find($id);

        if (! $slider) {
            return redirect()
                ->route('admin.sliders')
                ->with('error', 'Silinmek istenen slider bulunamadı.');
        }

        if ($slider->image && File::exists(public_path($slider->image))) {
            File::delete(public_path($slider->image));
        }

        if ($slider->thumbnail && File::exists(public_path($slider->thumbnail))) {
            File::delete(public_path($slider->thumbnail));
        }

        $slider->delete();

        return redirect()
            ->route('admin.sliders')
            ->with('success', 'Slider başarıyla silindi.');
    }

    public function slider_update(SliderUpdateRequest $request, $id): RedirectResponse
    {
        $slider = Slider::find($id);

        if (! $slider) {
            return redirect()
                ->route('admin.sliders')
                ->with('error', 'Güncellenmek istenen slider bulunamadı.');
        }

        $data = $request->validated();

        $updateData = [
            'title' => $data['title'],
            'subtitle' => $data['description'],
            'display_order' => $data['order'] ?? $slider->display_order,
            'status' => $data['status'] === 'active',
        ];

        if ($request->hasFile('image')) {
            $uploadPath = public_path('uploads/slider');
            $thumbnailPath = public_path('uploads/slider/thumbs');

            File::ensureDirectoryExists($uploadPath);
            File::ensureDirectoryExists($thumbnailPath);

            $imageFile = $request->file('image');
            $extension = strtolower($imageFile->getClientOriginalExtension());
            $fileName = Str::uuid()->toString().'.'.$extension;

            $storedOriginalPath = $uploadPath.DIRECTORY_SEPARATOR.$fileName;
            $storedThumbnailPath = $thumbnailPath.DIRECTORY_SEPARATOR.'thumb-'.$fileName;

            try {
                $imageFile->move($uploadPath, $fileName);

                $this->generateThumbnail($storedOriginalPath, $storedThumbnailPath, $extension, 200, 200);

                if ($slider->image && File::exists(public_path($slider->image))) {
                    File::delete(public_path($slider->image));
                }

                if ($slider->thumbnail && File::exists(public_path($slider->thumbnail))) {
                    File::delete(public_path($slider->thumbnail));
                }

                $updateData['image'] = 'uploads/slider/'.$fileName;
                $updateData['thumbnail'] = 'uploads/slider/thumbs/thumb-'.$fileName;
            } catch (Throwable $exception) {
                if (File::exists($storedOriginalPath)) {
                    File::delete($storedOriginalPath);
                }

                if (File::exists($storedThumbnailPath)) {
                    File::delete($storedThumbnailPath);
                }

                report($exception);

                return redirect()
                    ->route('admin.sliders')
                    ->with('error', 'Slider güncellenirken bir hata oluştu.');
            }
        }

        $slider->update($updateData);

        return redirect()
            ->route('admin.sliders')
            ->with('success', 'Slider başarıyla güncellendi.');
    }

    /**
     * @throws RuntimeException
     */
    private function generateThumbnail(string $sourcePath, string $destinationPath, string $extension, int $width, int $height): void
    {
        $imageResource = $this->createImageResource($sourcePath, $extension);

        if ($imageResource === null) {
            throw new RuntimeException('Desteklenmeyen görsel formatı.');
        }

        $sourceWidth = imagesx($imageResource);
        $sourceHeight = imagesy($imageResource);

        if ($sourceWidth === 0 || $sourceHeight === 0) {
            imagedestroy($imageResource);
            throw new RuntimeException('Geçersiz görsel boyutu.');
        }

        $ratio = min($width / $sourceWidth, $height / $sourceHeight);
        $targetWidth = (int) round($sourceWidth * $ratio);
        $targetHeight = (int) round($sourceHeight * $ratio);

        $canvas = imagecreatetruecolor($width, $height);

        if (in_array($extension, ['png', 'webp'], true)) {
            imagealphablending($canvas, false);
            imagesavealpha($canvas, true);
            $transparent = imagecolorallocatealpha($canvas, 0, 0, 0, 127);
            imagefilledrectangle($canvas, 0, 0, $width, $height, $transparent);
        } else {
            $white = imagecolorallocate($canvas, 255, 255, 255);
            imagefilledrectangle($canvas, 0, 0, $width, $height, $white);
        }

        $destinationX = (int) floor(($width - $targetWidth) / 2);
        $destinationY = (int) floor(($height - $targetHeight) / 2);

        imagecopyresampled(
            $canvas,
            $imageResource,
            $destinationX,
            $destinationY,
            0,
            0,
            $targetWidth,
            $targetHeight,
            $sourceWidth,
            $sourceHeight
        );

        $this->saveImageResource($canvas, $destinationPath, $extension);

        imagedestroy($imageResource);
        imagedestroy($canvas);
    }

    public function categories(): View
    {
        $categories = Category::query()
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.pages.categories', compact('categories'));
    }

    public function category_add(): View
    {
        return view('admin.pages.category_add');
    }

    public function category_store(CategoryStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $status = $this->normalizeStatus($data['status']);

        try {
            Category::create([
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'description' => $data['description'],
                'status' => $status,
            ]);
        } catch (Throwable $exception) {
            report($exception);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kategori kaydedilirken bir hata oluştu.');
        }

        return redirect()
            ->route('admin.categories')
            ->with('success', 'Kategori başarıyla eklendi.');
    }

    public function category_edit($id): RedirectResponse|View
    {
        $category = Category::find($id);

        if (! $category) {
            return redirect()
                ->route('admin.categories')
                ->with('error', 'Kategori bulunamadı.');
        }

        return view('admin.pages.category_edit', compact('category'));
    }

    public function category_update(CategoryUpdateRequest $request, $id): RedirectResponse
    {
        $category = Category::find($id);

        if (! $category) {
            return redirect()
                ->route('admin.categories')
                ->with('error', 'Güncellenmek istenen kategori bulunamadı.');
        }

        $data = $request->validated();
        $status = $this->normalizeStatus($data['status']);

        $category->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'description' => $data['description'],
            'status' => $status,
        ]);

        return redirect()
            ->route('admin.categories')
            ->with('success', 'Kategori başarıyla güncellendi.');
    }

    public function category_destroy($id): RedirectResponse
    {
        $category = Category::find($id);

        if (! $category) {
            return redirect()
                ->route('admin.categories')
                ->with('error', 'Silinmek istenen kategori bulunamadı.');
        }

        $category->delete();

        return redirect()
            ->route('admin.categories')
            ->with('success', 'Kategori başarıyla silindi.');
    }

    private function normalizeStatus(mixed $status): int
    {
        return in_array((string) $status, ['1', 'true', 'active'], true) ? 1 : 0;
    }

    public function blogs(): View
    {
        $blogs = Blog::query()
            ->orderByDesc('id')
            ->where('status', 1)
            ->paginate(10);
        return view('admin.pages.blogs', compact('blogs'));
    }
    public function blog_add(): View
    {
        return view('admin.pages.blog_add');
    }
    public function blog_store(): View
    {
        return view('admin.pages.blog_store');
    }
    public function blog_edit(): View
    {
        return view('admin.pages.blog_edit');
    }
    public function blog_update(): View
    {
        return view('admin.pages.blog_update');
    }
    public function blog_destroy(): View
    {
        return view('admin.pages.blog_destroy');
    }

    public function members(): View
    {
        return view('admin.pages.members');
    }

    public function corp_members(): View
    {
        return view('admin.pages.corp_members');
    }

    public function requestforms(): View
    {
        return view('admin.pages.requestforms');
    }

    public function general_set(): View
    {
        return view('admin.pages.general_set');
    }

    /**
     * @throws RuntimeException
     */
    private function createImageResource(string $path, string $extension)
    {
        return match ($extension) {
            'jpg', 'jpeg' => imagecreatefromjpeg($path),
            'png' => imagecreatefrompng($path),
            'webp' => imagecreatefromwebp($path),
            default => null,
        };
    }

    /**
     * @throws RuntimeException
     */
    private function saveImageResource($image, string $path, string $extension): void
    {
        $saved = match ($extension) {
            'jpg', 'jpeg' => imagejpeg($image, $path, 85),
            'png' => imagepng($image, $path, 6),
            'webp' => imagewebp($image, $path, 80),
            default => false,
        };

        if (! $saved) {
            throw new RuntimeException('Görsel kaydedilemedi.');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
