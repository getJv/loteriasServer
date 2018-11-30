<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'jogo_tipo_id'              =>   1 ,
            'concurso'                  =>   2097 ,
            'data_sorteio'              =>   Carbon::parse('Y-m-d', '14/11/2018')->setTimezone('America/Sao_paulo') ,
            '1_dezena'                  =>   51 ,
            '2_dezena'                  =>   28 ,
            '3_dezena'                  =>   24 ,
            '4_dezena'                  =>   49 ,
            '5_dezena'                  =>   9 ,
            '6_dezena'                  =>   45 ,
            'arrecadacao_total'         =>   50929053 ,
            'ganhadores_sena'           =>   0 ,
            'cidade'                    =>   '' ,
            'uf'                        =>   '',
            'rateio_sena'               =>   0 ,
            'ganhadores_quina'          =>   113 ,
            'rateio_quina'              =>   25984.88 ,
            'ganhadores_quadra'         =>   6422 ,
            'rateio_quadra'             =>   653.17 ,
            'acumulado'                 =>   'SIM' ,
            'valor_acumulado'           =>   32589388.72 ,
            'estimativa_prêmio'         =>   37000000 ,
            'acumulado_mega_da_virada'  =>   59247583.38
            

            
        ]);

        
        
        
        
        
        
        /* DB::table('sorteios')->insert([
            'concurso'      => 2823
            
            ]); */

    }
}
