<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Piso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piso', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpiso');
            $table->unsignedInteger('numero_piso');
            $table->unsignedInteger('can_hab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piso');
    }
}
