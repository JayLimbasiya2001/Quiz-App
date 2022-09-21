<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('USERID');
            $table->string('USERNAME');
            $table->unsignedBiginteger('RoleId');
            $table->string('GENDER');
            $table->string('EMAIL');
            $table->BigInteger('CONTACT');
            $table->string('PASSWORD');

            $table->foreign('RoleId')->references('RoleId')->on('role');
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
        Schema::dropIfExists('user');
    }
}
