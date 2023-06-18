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
        Schema::create('analisis_mascotas', function (Blueprint $table) {
            $table->id('id_amascota');
            $table->string('name');
            $table->string('url');
            $table->date('fecha');
            $table->unsignedBigInteger('id_mascota');

            $table->foreign('id_mascota')->on('mascotas')->references('id_masc')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('analisis_mascotas');
    }
};
