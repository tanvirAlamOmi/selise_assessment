<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
   

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([

            [
                'book_name' => 'A Tale of Two Cities',
                'author' => 'Charles Darwin',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Oliver Twist',
                'author' => 'Charles Darwin',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Aadhe Adhure',
                'author' => 'Mohan Rakesh',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Anna Karenina',
                'author' => 'Leo Tolstoy',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Arthshastra',
                'author' => 'Kautilya',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Ben Hur',
                'author' => 'Lewis Wallace',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'book_name' => 'Broken Wings',
                'author' => 'Sarojini Naidu',
                'price' => 200,
                'cover_image' => "https://m.media-amazon.com/images/I/714odx3GeNL.jpg",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
