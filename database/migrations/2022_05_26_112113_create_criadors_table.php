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
        Schema::create('criadors', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion',10)->nullable();
            $table->string('nombre',250);
            $table->string('foto_url',250)->nullable();
            $table->string('correo_e',250)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('descripcion',250)->nullable();
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
        Schema::dropIfExists('criadors');
    }
};
