<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
//        Category::factory(5)->create();
        $category = Category::factory()->create([
            'name' => 'Fiction',
        ]);
        Book::factory(5)->create([
            'category_id' => $category->id,
        ]);
    }
}
