<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->float('price');
            $table->smallInteger('quantity');
            $table->float('discount')->nullable();
            $table->text('content')->nullable();
            $table->foreignId('product_attribute_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->foreignId('order_id')
                  ->constrained()
                  ->onDelete('cascade');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
