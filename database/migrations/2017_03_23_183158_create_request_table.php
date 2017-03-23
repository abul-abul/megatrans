<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('cargo_description')->nullable();
            $table->string('code')->nullable();
            $table->string('number_and_types_of_railcars')->nullable();
            $table->string('cargo_gross_weight_in_one_railcar')->nullable();
            $table->string('cargo_total_gross_weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('un_number')->nullable();
            $table->string('type_of_packaging')->nullable();
            $table->string('special_features')->nullable();
            $table->string('loading_date')->nullable();
            $table->string('loading_region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('destination_region')->nullable();
            $table->string('railcars_forwarding_route')->nullable();
            $table->string('railway_and_dispatch_station')->nullable();
            $table->string('railway_and_destination_station')->nullable();
            $table->string('customs_clearance')->nullable();
            $table->string('other_information')->nullable();
            $table->string('active_view')->nullable();
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
        Schema::drop('request');
    }
}
