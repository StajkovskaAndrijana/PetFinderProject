<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('country_id');
            $table->string('short_description');
            $table->string('characteristics');
            $table->unsignedBigInteger('coat_length_id');
            $table->unsignedBigInteger('trained_id');
            $table->string('good_with');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('gender_id');
            $table->string('long_description');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('coat_length_id')->references('id')->on('coat__lengths')->onDelete('cascade');
            $table->foreign('trained_id')->references('id')->on('house_traineds')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
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
        Schema::dropIfExists('pets');
    }
}
