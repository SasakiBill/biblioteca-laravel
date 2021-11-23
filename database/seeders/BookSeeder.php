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
            'name' => 'teste 2',
            'description' => 'Descrição descrição',
            'author' => 'Autor teste',
            'category' => 'Guerra',
            'book_status' => TRUE,
        ]);
        
    }
}
