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
            'description' => 'Teste 2',
            'author' => 'teste 2',
            'category' => 'Investigação',
            'book_status' => TRUE,
        ]);
        
    }
}
