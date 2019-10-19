<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcorrrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrrencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('latitude', 15, 10);
            $table->double('longitude', 15, 10);
            $table->timestamps();
            $table->string('tamanho_esperado');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocorrrencias');
    }
}
