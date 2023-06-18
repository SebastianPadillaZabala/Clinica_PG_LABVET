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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('id_masc');
            $table->string('name');
            $table->string('edad');
            $table->string('raza');
            $table->string('especie');
            $table->string('color');
            $table->string('sexo');
            $table->unsignedBigInteger('id_paciente');

            $table->foreign('id_paciente')->on('pacientes')->references('id_pac')
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
        Schema::dropIfExists('mascotas');
    }
};
