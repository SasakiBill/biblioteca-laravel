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
            'author' => 'teste',
            'category' => 'Contos de Fadas',
            'book_status' => TRUE,
        ]);
        
    }
}
