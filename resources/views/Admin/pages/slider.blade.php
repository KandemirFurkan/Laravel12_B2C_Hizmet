@extends('admin.layouts.app')

@section('content')



    <!-- Main Content -->

      <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
          <button class="btn btn-outline-primary d-md-none" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
          </button>
          <h4 class="mb-0 ms-2 ms-md-0">Slider Yönetimi</h4>
        </div>
        <a href="{{ route('admin.slider_add') }}" class="btn btn-primary">
          <i class="bi bi-plus-circle me-1"></i>
          Yeni Slider Ekle
        </a>
      </div>

      @if (session('success'))
        <div class="alert alert-success mt-3" role="alert">
          {{ session('success') }}
        </div>
      @endif

      @if (session('error'))
        <div class="alert alert-danger mt-3" role="alert">
          {{ session('error') }}
        </div>
      @endif

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Resim</th>
                  <th>Başlık</th>
                  <th>Açıklama</th>
                  <th>Durum</th>
                  <th>Sıra</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($sliders as $slider)
                  @php
                    $imageSource = $slider->thumbnail
                        ? asset($slider->thumbnail)
                        : ($slider->image ? asset($slider->image) : 'https://placehold.co/200x200?text=Slider');
                  @endphp
                  <tr>
                    <td>
                      <div class="slider-thumb-wrapper">
                        <img
                          src="{{ $imageSource }}"
                          alt="{{ $slider->title }}"
                          class="slider-thumb"
                          loading="lazy"
                        >
                      </div>
                    </td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->subtitle }}</td>
                    <td>
                      @if ($slider->status)
                        <span class="badge bg-success">Aktif</span>
                      @else
                        <span class="badge bg-secondary">Pasif</span>
                      @endif
                    </td>
                    <td>{{ $slider->display_order }}</td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="{{ route('admin.slider_edit', ['id' => $slider->id]) }}" class="btn btn-sm btn-outline-primary">Düzenle</a>
                        <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Bu sliderı silmek istediğinize emin misiniz?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-outline-danger">Sil</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  
                @empty
                  <tr>
                    <td colspan="6" class="text-center text-muted">Henüz slider kaydı bulunmuyor.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          @if ($sliders->hasPages())
            <div class="pagination-container">
              <div class="pagination-summary">
                {{ $sliders->firstItem() }} - {{ $sliders->lastItem() }} / {{ $sliders->total() }} kayıt
              </div>
              {{ $sliders->onEachSide(1)->links('vendor.pagination.admin') }}
            </div>
          @endif
        </div>
      </div>


@endsection
