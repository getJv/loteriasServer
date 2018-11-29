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
            "0":{"0":"09", "1":"false" },
            "1":{"0":"10", "1":"true" },
            "2":{"0":"12", "1":"true" },
            "3":{"0":"05", "1":"true" },
            "4":{"0":"14", "1":"false" },
            "5":{"0":"52", "1":"false" }
        }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 1,
            'dezenas'  => $valores,
        ]);
        $valores = '{
            "0":{"0":"05", "1":"true" },
            "1":{"0":"07", "1":"false" },
            "2":{"0":"09", "1":"false" },
            "3":{"0":"15", "1":"false" },
            "4":{"0":"48", "1":"false" },
            "5":{"0":"52", "1":"true" }
                }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 2,
            'dezenas'  => $valores,
        ]);
        $valores = '{
            "0":{"0": "25", "1":"true" },
            "1":{"0": "31", "1":"true" },
            "2":{"0": "28", "1":"true" },
            "3":{"0": "06", "1":"true" },
            "4":{"0": "02", "1":"true" },
            "5":{"0": "58", "1":"true" }
        }';
        DB::table('jogo_detalhes')->insert([
            'jogo_id'  => 3,
            'dezenas'  => $valores,
        ]);

       
    }
}
