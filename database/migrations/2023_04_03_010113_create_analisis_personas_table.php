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
        Schema::create('analisis_personas', function (Blueprint $table) {
            $table->id('id_apersona');
            $table->string('name');
            $table->string('url');
            $table->date('fecha');
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
        Schema::dropIfExists('analisis_personas');
    }
};
