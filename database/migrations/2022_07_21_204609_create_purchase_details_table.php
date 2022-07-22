<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\ForeignKeyDefinition;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            
         
            $table->float('price');
            $table->integer('quantity');
            $table->unsignedBigInteger('shopping_id');
            $table->foreign('shopping_id')->references('id')->on('purchases');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('Sku')->on('products');
        
            $table->timestamps();
        });
    }
  



    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
};
