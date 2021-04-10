<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostitusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postitus', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',200);
            $table->string('texto',2000);
            $table->string('cor_primaria',100);
            $table->string('cor_secundaria',100);
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on("usuarios");
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
        Schema::dropIfExists('postitus');
    }
}
