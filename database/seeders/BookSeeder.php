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
            'name' => 'teste 3',
            'description' => 'A fatalidade de teste e o declínio do oriente médio.',
            'author' => 'teste',
            'category' => 'Ficcção Científica',
            'book_status' => TRUE,
        ]);
        
    }
}
