<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        Author::factory()->count(3)->create()->each(function ($author) {
            Book::factory()->count(2)->create([
                'author_id' => $author->id
            ]);
        });
    }
}
