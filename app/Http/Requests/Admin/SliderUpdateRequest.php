<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'order' => ['nullable', 'integer', 'min:1'],
            'status' => ['required', 'in:active,inactive'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'image.file' => 'Yüklenen dosya geçerli bir dosya olmalıdır.',
            'image.mimes' => 'Yalnızca JPG, JPEG, PNG veya WEBP formatındaki resimler yüklenebilir.',
            'image.max' => 'Resim boyutu 5 MB değerini aşmamalıdır.',
            'title.required' => 'Başlık alanı zorunludur.',
            'title.string' => 'Başlık geçerli bir metin olmalıdır.',
            'title.max' => 'Başlık en fazla 255 karakter olabilir.',
            'description.required' => 'Açıklama alanı zorunludur.',
            'description.string' => 'Açıklama geçerli bir metin olmalıdır.',
            'description.max' => 'Açıklama en fazla 255 karakter olabilir.',
            'order.integer' => 'Sıra değeri bir sayı olmalıdır.',
            'order.min' => 'Sıra değeri en az 1 olmalıdır.',
            'status.required' => 'Durum seçimi zorunludur.',
            'status.in' => 'Durum seçimi geçersiz.',
        ];
    }
}
