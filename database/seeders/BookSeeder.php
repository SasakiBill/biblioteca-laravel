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

        Book::query()->create([
            'name' => ' Teste 2',
            'description' => 'A queda do teste se deu após muitas batalhas vencidas pelo Oriente Médio. Seu filho irá conseguir substituí-lo?',
            'author' => 'teste',
            'category' => 'biography',
            'book_status' => FALSE,
        ]);
        
    }
}
