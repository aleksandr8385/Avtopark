<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvtoCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avto_cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Машина - номер(строка), имя водителя(строка).
            $table->string('number', 50);
            $table->string('name_driver', 50);

            //park_id связь с автопарком
            $table->integer('park_id');

            $table->foreign('park_id')->references('id')->on('avto_parks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avto_cars');
    }
}
