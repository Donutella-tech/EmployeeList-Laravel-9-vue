<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //Фио работника
            $table->string('position');//Должность
            $table->date('date'); //Дата трудоустройства
            $table->decimal('salary'); //заработная плата
            $table->integer('boss'); //начальник
            $table->string('image')->nullable();// адрес картинк
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
        Schema::dropIfExists('employees');
    }
};
