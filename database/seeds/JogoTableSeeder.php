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
                'arquivado'     => 'n',
                'conferido'     => 'n',
                'ganhou'        => 'n',
                'jogador_id'    => 1
                
        ]);

        DB::table('jogos')->insert([
            'jogo_tipo_id'  => 1,
            'concurso'    => 2098,
            'jogador_id'    => 1,
            'arquivado'     => 's',
            'conferido'     => 's',
            'ganhou'        => 'n'
        ]);

        DB::table('jogos')->insert([
            'jogo_tipo_id'  => 1,
            'concurso'     => 2099,
            'jogador_id'    => 1,
            'arquivado'     => 'n',
            'conferido'     => 's',
            'ganhou'        => 's'
        ]);
    }
}
