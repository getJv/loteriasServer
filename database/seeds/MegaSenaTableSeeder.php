<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MegaSenaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mega_senas')->insert([
            'jogo_tipo_id'              =>   1 ,
            'concurso'                  =>   2097 ,
            'data_sorteio'              =>   Carbon::createFromFormat('d/m/Y', '14/11/2018'),
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
		
		DB::table('mega_senas')->insert([

			'jogo_tipo_id'              =>   1,
			'concurso'                  =>   2098,
			'data_sorteio'              =>   Carbon::createFromFormat('d/m/Y', '17/11/2018'),
			'1_dezena'                  =>   2,
			'2_dezena'                  =>   38,
			'3_dezena'                  =>   27,
			'4_dezena'                  =>   60,
			'5_dezena'                  =>   18,
			'6_dezena'                  =>   8,
			'arrecadacao_total'         =>   49113232.00,
			'ganhadores_sena'           =>   0,
			'cidade'                    =>   '', 
			'uf'                        =>   '', 
			'rateio_sena'               =>   0,
			'ganhadores_quina'          =>   85,
			'rateio_quina'              =>   33312.96,
			'ganhadores_quadra'         =>   6551,
			'rateio_quadra'             =>   617.48,
			'acumulado'                 =>   'SIM',
			'valor_acumulado'           =>   37805495.92,
			'estimativa_prêmio'         =>   43500000.00,
			'acumulado_mega_da_virada'  =>   59992741.57
			            

            
        ]);
		
		DB::table('mega_senas')->insert([		
			'jogo_tipo_id'              =>   1,
			'concurso'                  =>   2099,
			'data_sorteio'              =>   Carbon::createFromFormat('d/m/Y', '21/11/2018'),
			'1_dezena'                  =>   30,
			'2_dezena'                  =>   15,
			'3_dezena'                  =>   5,
			'4_dezena'                  =>   58,
			'5_dezena'                  =>   20,
			'6_dezena'                  =>   27,
			'arrecadacao_total'         =>   58036464.50,
			'ganhadores_sena'           =>   0,
			'cidade'                    =>   '',
			'uf'                        =>   '',
			'rateio_sena'               =>   0,
			'ganhadores_quina'          =>   97,
			'rateio_quina'              =>   34495.53,
			'ganhadores_quadra'         =>   7549,
			'rateio_quadra'             =>   633.2,
			'acumulado'                 =>   'SIM',
			'valor_acumulado'           =>   60511157.87,
			'estimativa_prêmio'         =>   70000000.00,
			'acumulado_mega_da_virada'  =>   60873285.26,
		]);
    }
}
