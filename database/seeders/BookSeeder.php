<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::query()->create([
            'name' => 'teste',
            'description' => 'O retorno de teste se deu após muitas tentativas de consertar o bug.',
            'author' => 'teste',
            'category' => 'teste',
            'book_status' => TRUE,
        ]);
    }
}
