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
        $valores = '{
                        "0":1,
                        "1":2,
                        "2":3,
                        "3":4,
                        "4":5,
                        "5":6
                    }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 1,
            'dezenas'  => $valores,
        ]);
        $valores = '{
                    "0":5,
                    "1":7,
                    "2":9,
                    "3":51,
                    "4":48,
                    "5":16
                }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 2,
            'dezenas'  => $valores,
        ]);
        $valores = '{
                    "0":50,
                    "1":27,
                    "2":39,
                    "3":41,
                    "4":38,
                    "5":26
                }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 3,
            'dezenas'  => $valores,
        ]);

       
    }
}
