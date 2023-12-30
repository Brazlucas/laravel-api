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
            'name' => 'ADMIN',
            'email' => 'adminlucas@admin.com',
            'password' => Hash::make('sua_senha'),
        ]);

        // Adicione mais usuários conforme necessário
    }
}