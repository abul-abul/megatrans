<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en')->nullable();
            $table->string('title_rus')->nullable();
            $table->string('title_arm')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_rus')->nullable();
            $table->string('description_arm')->nullable();
            $table->string('video')->nullable();
            $table->string('images')->nullable();
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
        Schema::drop('blog');
    }
}
