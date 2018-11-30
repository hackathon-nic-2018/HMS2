<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idreservacion');
            $table->unsignedInteger('idcliente');
            $table->integer('idhabitacion');
            $table->time('fechaingreso');
            $table->time('fechasalida');
            $table->unsignedInteger('idfactura');

            $table->index(["idfactura"], 'fk_reservacion_factura1_idx');

            $table->index(["idhabitacion"], 'fk_reservacion_habitacion1_idx');

            $table->index(["idcliente"], 'fk_reservacion_cliente_idx');


            $table->foreign('idcliente', 'fk_reservacion_cliente_idx')
                ->references('idcliente')->on('cliente')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idhabitacion', 'fk_reservacion_habitacion1_idx')
                ->references('idhabitacion')->on('habitacion')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idfactura', 'fk_reservacion_factura1_idx')
                ->references('idfactura')->on('factura')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacion');
    }
}
