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
            'name' => 'teste 4',
            'description' => 'Teste.',
            'author' => 'teste',
            'category' => 'Ação',
            'book_status' => TRUE,
        ]);
        
    }
}
