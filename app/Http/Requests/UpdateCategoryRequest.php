<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Tentukan apakah request diizinkan.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi update kategori.
     */
    public function rules(): array
    {
        $id = $this->route('category');

        return [
            'name' => "required|string|unique:categories,name,{$id}"
        ];
    }

    /**
     * Pesan error custom.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique'   => 'Nama kategori sudah ada.',
        ];
    }
}