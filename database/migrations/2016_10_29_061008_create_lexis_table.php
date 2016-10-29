<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLexisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lexis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spelling');
            $table->string('part_of_speech');
            $table->string('pronunciation');
            $table->string('meaning');
            $table->integer('user_id');
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
        Schema::drop('lexis');
    }
}
