<?php

use Illuminate\Database\Seeder;

class TipoJogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $valores = '{
                         "6": 3.50
                        ,"7": 24.50
                        ,"8": 24.50
                        ,"9": 24.50
                        ,"10": 24.50
                        ,"11": 24.50
                        ,"12": 24.50
                        ,"13": 24.50
                        ,"14": 24.50
                        ,"15": 24.50
                    }';
        DB::table('jogo_tipos')->insert([
            'nome'      => 'Mega-sena',
            'valores'           => $valores,
            'dias_de_sorteio'   => '{"dias": "2,4,6" }'
           
        ]);
    }
}
