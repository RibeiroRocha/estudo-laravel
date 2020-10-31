<?php

use App\Pessoa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder //executa todas as seeders do sistema
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class); //chama as seeder dos usuarios
        $this->call(PessoaSeeder::class); //chama uma seeder especifica
    }
}
