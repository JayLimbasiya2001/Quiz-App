<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->unsignedBiginteger('StuId');
            $table->string('Name');
            $table->unsignedBiginteger('EXAMID');
            $table->integer('TOTAL');
            $table->integer('OBTAIN');

            $table->foreign('StuId')->references('StuId')->on('student');
            $table->foreign('EXAMID')->references('EXAMID')->on('exam');

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
        Schema::dropIfExists('result');
    }
}
