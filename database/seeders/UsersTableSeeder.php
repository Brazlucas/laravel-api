<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Remova esta linha se ela estiver presente

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'lucas que nao e adm',
            'email' => 'lucasn@email.com',
            'is_admin' => false,
            'password' => Hash::make('nadmin'),
        ]);

        // Adicione mais usuários conforme necessário
    }
}