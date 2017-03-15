<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('Filipino_2');
            $table->integer('Statistics');
            $table->integer('Family_Planning');
            $table->integer('Business_Process');
            $table->integer('Bible_Science_2');
            $table->integer('Web_App_2');
            $table->integer('Team_Sports');
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
        Schema::dropIfExists('grade');
    }
}
