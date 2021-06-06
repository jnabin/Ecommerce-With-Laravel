<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UniqueToNonUniques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subCategories', function (Blueprint $table) {
            $table->dropUnique(['subCategory-name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subCategories', function (Blueprint $table) {
            $table->unique('subCategory-name');
        });
    }
}
