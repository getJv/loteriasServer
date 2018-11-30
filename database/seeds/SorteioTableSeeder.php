<?php

use Illuminate\Database\Seeder;

class SorteioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sorteios')->insert([
            'concurso'      => 1214
            
        ]);

        DB::table('sorteios')->insert([
            'concurso'      => 2823
            
            ]);

    }
}
