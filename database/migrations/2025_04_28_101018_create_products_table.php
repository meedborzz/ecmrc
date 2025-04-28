<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->text('description')->nullable();
                $table->decimal('price', 8, 2);
                $table->decimal('old_price', 8, 2)->nullable();
                $table->string('image')->nullable();
                $table->string('hover_image')->nullable();
                $table->decimal('discount', 8, 2)->nullable();
                $table->timestamps();
            });
        }
        
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
