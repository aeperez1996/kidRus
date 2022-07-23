<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public Function run()
    {   
        DB::table('products')->insert([
            'name' => 'Blue Blouse',
            'sell_price'=> '22.00',
             'Sku'=>'002',
             'stock'=>'30',
             'desctiption'=>'Blusa azul de gran calida',
             'category_id'=>'3',
            
             'image'=>' e:\Proyecto articulos infantiles\recursos\recursos\for girls\girls-10-2-580x870.jpg'
              
          ]);
          DB::table('products')->insert([
            'name' => 'White Blouse',
            'sell_price'=> '22.00',
             'Sku'=>'002',
             'stock'=>'30',
             'desctiption'=>'Blusa azul de gran calidad',
             'category_id'=>'3',
             'image'=>'  e:\Proyecto articulos infantiles\recursos\recursos\for girls\girls-1-1-580x870.jpg',
          
          ]);

          DB::table('products')->insert([
            'name' => 'Brown Rainy Bag',
            'sell_price'=> '15.00',
             'Sku'=>'022',
             'stock'=>'40',
             'desctiption'=>'bolsa cafe de gran calidad',
             'category_id'=>'4',
             'image'=>'e:\Proyecto articulos infantiles\recursos\recursos\for home\for-home-5-1-580x870.jpg',

        ]);

          DB::table('products')->insert([
            'name' => 'Rabbit bag',
            'sell_price'=> '20.00',
             'Sku'=>'033',
             'stock'=>'30',
             'desctiption'=>'Bolsa de conejo de gran calidad',
             'category_id'=>'4',
             'image'=>'e:\Proyecto articulos infantiles\recursos\recursos\for girls\girls-2-2-580x870.jpg
             ',

          ]);
          DB::table('products')->insert([
            'name' => 'White Blouse',
            'sell_price'=> '17.00',
             'Sku'=>'032',
             'stock'=>'30',
             'desctiption'=>'Blusa Blanca de gran calidad',
             'category_id'=>'3',
             'image'=>'e:\Proyecto articulos infantiles\recursos\recursos\for girls\girls-1-1-580x870.jpg',
            
        ]);

    }
}
