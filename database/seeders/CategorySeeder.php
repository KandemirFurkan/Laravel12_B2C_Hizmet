<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create([
           'name' => 'Hizmetler',
           'slug' => 'hizmetler',
           'description' => 'Hizmetler kategorisi',
           'keywords' => 'hizmetler, kategori',
           'content' => 'Hizmetler kategorisinde çeşitli hizmetler bulunmaktadır.',
           'status' => 1,
       ]);
           Category::create([
           'name' => 'Blog',
           'slug' => 'blog',
           'description' => 'Blog kategorisi',
           'keywords' => 'blog, makale, içerik',
           'content' => 'Blog kategorisinde çeşitli makaleler bulunmaktadır.',
           'status' => 1,
       ]);
       Category::create([
           'name' => 'Test',
           'slug' => 'test',
           'description' => 'Test kategorisi',
           'keywords' => 'test, kategori',
           'content' => 'Test kategorisinde çeşitli testler bulunmaktadır.',
           'status' => 0,
       ]);
    }
}
