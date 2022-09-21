<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamAttemptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_attempt', function (Blueprint $table) {
            $table->unsignedBiginteger('StuId');
            $table->foreign('StuId')->references('StuId')->on('student');
            $table->unsignedBiginteger('EXAMID');
            $table->foreign('EXAMID')->references('EXAMID')->on('exam');
            $table->string('attempt');
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
        Schema::dropIfExists('exam_attempt');
    }
}
