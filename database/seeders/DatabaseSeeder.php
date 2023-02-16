<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Book::factory(5)->create();

        
        // Book::create([
        //     'name' => '1984',
        //     'image' => '1984.jpeg',
        //     'author' => 'Joerge orwell',
        //     'published' => '1949',
        //     'description' => 'lorem20 dsjkqbcjbqsnkjcbksqjbcjqsbb cqsbkjcbqskjbcsq csjqnkcjnsqkcn',
        //     'tags' => 'Politics, society, future'

        // ]);

        // Book::create([
        //     'name' => 'Animal farm',
        //     'image' => 'Animal_farm.jpeg',
        //     'author' => 'Joerge orwell',
        //     'published' => '1949',
        //     'description' => 'lorem20 dsjkqbcjbqsnkjcbksqjbcjqsbb cqsbkjcbqskjbcsq csjqnkcjnsqkcn',
        //     'tags' => 'Politics, society, future'

        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
