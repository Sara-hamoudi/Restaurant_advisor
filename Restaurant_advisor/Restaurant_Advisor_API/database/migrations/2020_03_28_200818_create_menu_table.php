<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('description');
          $table->float('price');
          $table->string('image')->nullable();
          $table->timestamps();

          $table->integer('resto_id')->unsigned()->nullable();
          $table->index(["resto_id"], 'fk_menu_restaurant_idx');

          $table->foreign('resto_id', 'fk_menu_restaurant_idx')
              ->references('id')->on('restaurant')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
