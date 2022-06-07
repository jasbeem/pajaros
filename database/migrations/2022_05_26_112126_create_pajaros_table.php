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
        Schema::create('pajaros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('numero',5);
            $table->integer('anyo')->nullable();
            $table->enum('sexo',['macho','hembra','sin-definir'])->default('sin-definir');
            $table->enum('tipo',['canario','fauna','exoticos','periquitos'.'loros'.'palomas'])->default('canario');
            $table->enum('tipo_canario',['canto','forma','color'])->default('color');
            $table->enum('canario_canto',['timbrado','roller','malinois'])->default('timbrado');
            $table->enum('clase_melaninas',['a-negras','b-agata','c-bruno','d-isabela'])->default('a-negras');
            $table->enum('tipo_melaninas',['1-clasico','2-pastel','3-alagris','4-opal','5-faeos','6-satines','7-topacio','8-eumo','9-onix','10-cobalto','11-jaspe'])->default('1-clasico');
            $table->enum('categoria',['A-intenso','B-nevado','C-mosaico'])->default('A-intenso');
            $table->enum('lipocromo',['I-amarillo','II-rojo','III-blanco-dominante','IV-blanco','V-amarillo-marfil','VI-rojo-marfil'])->default('I-amarillo');
            $table->enum('complementarios',['sin-complementos','ojos-rojos','refraccion-azul','piel-negra'])->default('sin-complementos');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('criador_id')->constrained('criadors');
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
        Schema::dropIfExists('pajaros');
    }
};
