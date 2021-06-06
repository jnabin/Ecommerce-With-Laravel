<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToFinalsubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('finalSubCategories', function (Blueprint $table) {
            $table->string('finalSubcategories_name', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('finalSubCategories', function (Blueprint $table) {
            $table->dropColumn('finalSubcategories_name');
        });
    }
}
