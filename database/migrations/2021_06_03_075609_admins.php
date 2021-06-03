<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('phoneNumber', 14);
            $table->binary('photo')->nullable();
            $table->date('date_Of_Birth');
            $table->string('gender', 10);
            $table->string('username', 20);
            $table->string('password', 20);
            $table->string('usertType', 10);
            $table->string('address', 50);
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
        Schema::dropIfExists('admins');
    }
}
