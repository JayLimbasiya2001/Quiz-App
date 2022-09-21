<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->id('QUEID');
            $table->unsignedBiginteger('EXAMID');
            $table->string('Que');
            $table->string('optionA');
            $table->string('optionB');
            $table->string('optionC');
            $table->string('optionD');
            $table->string('Correct');
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
        Schema::dropIfExists('question');
    }
}
