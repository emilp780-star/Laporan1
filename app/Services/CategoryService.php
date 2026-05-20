<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    /**
     * Ambil semua kategori.
     */
    public function all(): Collection
    {
        return Category::all();
    }

    /**
     * Ambil satu kategori berdasarkan ID.
     */
    public function find(int $id): Category
    {
        return Category::findOrFail($id);
    }

    /**
     * Tambah kategori baru.
     */
    public function create(array $data): Category
    {
        return Category::create($data);
    }

    /**
     * Update kategori.
     */
    public function update(int $id, array $data): Category
    {
        $cat = Category::findOrFail($id);

        $cat->update($data);

        return $cat;
    }

    /**
     * Hapus kategori.
     */
    public function delete(int $id): void
    {
        Category::destroy($id);
    }
}