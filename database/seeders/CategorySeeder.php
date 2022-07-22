<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public Function run()
    {   
        DB::table('categories')->insert([
            'name' => 'For babies',
            'description'=> 'Articulos para bebe de muy buena calidad y precio',

              
          ]);
          DB::table('categories')->insert([
            
            'name' => 'For boys',
            'description'=> 'Articulos para Niños de muy buena calidad y precio',
          ]);

          DB::table('categories')->insert([
            'name' => 'For girls',
            'description'=> 'Articulos para Niñas de muy buena calidad y precio',
        ]);

          DB::table('categories')->insert([
            'name' => 'For home',
            'description'=> 'Articulos para la Casa de muy buena calidad y precio',
        ]);

          DB::table('categories')->insert([
            'name' => 'For play',
            'description'=> 'Articulos para jugar de muy buena calidad y precio',
        ]);


    }
}


