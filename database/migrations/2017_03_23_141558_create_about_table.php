<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_arm')->nullable();
            $table->string('title_rus')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_arm')->nullable();
            $table->longText('description_rus')->nullable();
            $table->string('alt')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_arm')->nullable();
            $table->longText('text_rus')->nullable();
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
        Schema::drop('about');
    }
}
