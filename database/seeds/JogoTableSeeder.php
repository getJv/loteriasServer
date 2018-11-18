<?php

use Illuminate\Database\Seeder;

class JogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jogos')->insert([
                'jogo_tipo_id'  => 1,
                'concurso'      => 1214,
                'jogador_id'    => 1,
                'jogo_vercedor' => 'n'
        ]);

        DB::table('jogos')->insert([
            'jogo_tipo_id'  => 1,
            'concurso'      => 1214,
            'jogador_id'    => 1,
            'jogo_vercedor' => 'n'
        ]);
    }
}
