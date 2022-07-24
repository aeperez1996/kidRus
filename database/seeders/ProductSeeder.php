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
    }
}
