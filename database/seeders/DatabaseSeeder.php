<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PurchaseSeeder::class);
    }
    protected function truncateTables(array $tables){

     DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
   foreach($tables as $table){
    DB::table($table)->truncate();
   }
   
   DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
