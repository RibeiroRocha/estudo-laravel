<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email' => 'funcionario@email.com'
            ],
            [
                'name' => 'Funcionario',
                'password' => bcrypt('funcionario')
            ]
        );

        User::firstOrCreate(
            [
                'email' => 'admin@email.com'
            ],
            [
                'name' => 'Administrador',
                'password' => bcrypt('admin') //bcrypt criptografa a senha do usuário
            ]
        );
    }
}
