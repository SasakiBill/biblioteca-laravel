<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'teste',
            'email' => 'teste@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '42 8888-8888',
            'isAdmin' => TRUE,
        ]);
    }
}
