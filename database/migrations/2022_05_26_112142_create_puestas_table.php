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
        Schema::create('puestas', function (Blueprint $table) {
            $table->id();
            $table->enum('estado',['nido','incubacion','embuche','separado','destete'])->default('nido');
            $table->date('fecha_primer_huevo')->nullable();
            $table->date('fecha_incubacion')->nullable();
            $table->date('fecha_mirar')->nullable();
            $table->date('fecha_eclosion')->nullable();
            $table->date('fecha_anillamiento')->nullable();
            $table->date('fecha_rejilla')->nullable();
            $table->date('fecha_destete')->nullable();
            $table->integer('numero_huevos')->nullable();
            $table->integer('numero_pisados')->nullable();
            $table->integer('numero_abortados')->nullable();
            $table->integer('pollos_destetados')->nullable();
            $table->integer('pollos_muertos')->nullable();
            $table->foreignId('pareja_id')->constrained('parejas');
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
        Schema::dropIfExists('puestas');
    }
};
