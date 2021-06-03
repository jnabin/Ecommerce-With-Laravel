<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number');
            $table->string('product_name', 30);
            $table->string('product_description', 100);
            $table->double('unitPrice', 6, 2);
            $table->foreignId('subCategory_id')->nullable()->constrained('subCategories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('finalSubCategory_id')->nullable()->constrained('finalSubCategories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mainCategory_id')->constrained('mainCategory')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('onHand');
            $table->double('cost', 5, 2);
            $table->foreignId('sales_id')->nullable()->constrained('sales')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
