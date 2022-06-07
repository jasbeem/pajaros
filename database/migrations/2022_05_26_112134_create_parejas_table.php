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
        Schema::create('parejas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('padre_id')->constrained('pajaros');
            $table->foreignId('madre_id')->constrained('pajaros');
            $table->string('jaula',200)->nullable();
            $table->date('fecha_union');
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
        Schema::dropIfExists('parejas');
    }
};
