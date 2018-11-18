<?php

use Illuminate\Database\Seeder;

class JogoDetalhesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valores = '{"dezenas": "01,02,03,04,05,06"}';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 1,
            'dezenas'  => $valores,
            
    ]);

       
    }
}
