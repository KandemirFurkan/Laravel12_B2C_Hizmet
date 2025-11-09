<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'status' => ['required', 'in:0,1'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kategori adı zorunludur.',
            'name.string' => 'Kategori adı geçerli bir metin olmalıdır.',
            'name.max' => 'Kategori adı en fazla 255 karakter olabilir.',
            'description.required' => 'Açıklama alanı zorunludur.',
            'description.string' => 'Açıklama geçerli bir metin olmalıdır.',
            'status.required' => 'Durum seçimi zorunludur.',
            'status.in' => 'Lütfen geçerli bir durum seçin.',
        ];
    }
}
