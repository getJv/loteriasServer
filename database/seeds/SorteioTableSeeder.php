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
        $valores = '{"dezenas": "01,02,03,04,05,06"}';
        DB::table('sorteios')->insert([
            'concurso_id'      => 1214,
            //'ano'           => 2018,
            'dezenas'       => $valores,
            'local'         => 'Luziania - GO',
            'dia'           => '2008-12-01 12:00:00'
        ]);

        DB::table('sorteios')->insert([
            'concurso_id'      => 2823,
            //'ano'           => 2018,
            'dezenas'       => $valores,
            'local'         => 'São Paulo - SP',
            'dia'           => '2008-12-01 12:00:00'
            ]);

    }
}
