<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->text('description_information');
            $table->text('recommendation');
            $table->text('includes');
            $table->text('additional_information');
            $table->string('duration');
            $table->float('adult_price');
            $table->float('adult_discount_price');
            $table->float('child_price');
            $table->float('child_discount_price');
            $table->boolean('see_home');
            $table->text('coupon_text');
            $table->boolean('mon');
            $table->boolean('tue');
            $table->boolean('wed');
            $table->boolean('thu');
            $table->boolean('fri');
            $table->boolean('sat');
            $table->boolean('sun');
            $table->boolean('active');
            $table->integer('qualification');
            $table->string('image');
            $table->boolean('transportation');
            //$table->integer('categorie_id')->unsigned();
            //$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('tours');
    }
}
