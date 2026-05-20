<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    /**
     * Tentukan apakah user diizinkan melakukan request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi untuk update item.
     */
    public function rules(): array
    {
        return [
            'name'        => 'sometimes|required|string|max:255',
            'quantity'    => 'sometimes|required|integer|min:0',
            'price'       => 'sometimes|required|numeric|min:0',
            'category_id' => 'sometimes|required|exists:categories,id',
        ];
    }

    /**
     * Pesan error custom.
     */
    public function messages(): array
    {
        return [
            'name.required'        => 'Nama item wajib diisi.',
            'quantity.integer'     => 'Jumlah harus angka bulat.',
            'price.numeric'        => 'Harga harus berupa angka.',
            'category_id.exists'   => 'Kategori tidak ditemukan.',
        ];
    }
}