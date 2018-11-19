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
        $valores = '{"dezenas": "05,08,09,40,05,70"}';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 2,
            'dezenas'  => $valores,
        ]);
        $valores = '{"dezenas": "15,18,59,41,05,60"}';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 3,
            'dezenas'  => $valores,
        ]);

       
    }
}
