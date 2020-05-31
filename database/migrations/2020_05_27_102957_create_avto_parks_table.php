<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvtoParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avto_parks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           
            //Автопарк - название(строка), адрес(строка), график работы(строка)
            $table->string('title', 50);
            $table->string('address', 100);
            $table->string('schedule', 50);
            
            //avto_id связь с машиной
            $table->integer('avto_id');

            $table->foreign('avto_id')->references('id')->on('avto_cars');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avto_parks');
    }
}
