<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            
            $table->id('StuId');
            $table->string('Name');
            $table->string('Gender');
            $table->unsignedBiginteger('COURSEID');
            $table->string('Email');
            $table->string('Contact');
            $table->string('Password');
            $table->foreign('COURSEID')->references('COURSEID')->on('course');
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
        Schema::dropIfExists('student');
    }
}
