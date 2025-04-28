<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiscountToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Check if the 'discount' column doesn't exist before adding it
            if (!Schema::hasColumn('products', 'discount')) {
                $table->decimal('discount', 8, 2)->nullable();
            }
        });
    }
    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'discount')) {
                $table->dropColumn('discount');
            }
        });
    }
}    