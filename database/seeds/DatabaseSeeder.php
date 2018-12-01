<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(TipoJogoTableSeeder::class);
        $this->call(MegaSenaTableSeeder::class);
        $this->call(JogoTableSeeder::class);
        $this->call(JogoDetalhesTableSeeder::class);
        
    }
}
