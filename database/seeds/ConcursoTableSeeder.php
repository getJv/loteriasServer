<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$collection = collect([1, 2, 3, 4, 5,6,7,8,9]);
        //$concurso = $collection->random(4)->implode('');
        DB::table('concursos')->insert([
            'concurso' => 1214,
            'ano' => 2018
           
        ]);
        DB::table('concursos')->insert([
            'concurso' => 2823,
            'ano' => 2018
           
        ]);
    }
}
