<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idhabitacion');
            $table->unsignedInteger('idpiso');
            $table->string('ventana', 45);
            $table->unsignedInteger('idtipo_habitacion');

            $table->index(["idpiso"], 'fk_habitacion_piso1_idx');

            $table->index(["idtipo_habitacion"], 'fk_habitacion_tipo_habitacion1_idx');


            $table->foreign('idpiso', 'fk_habitacion_piso1_idx')
                ->references('idpiso')->on('piso')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idtipo_habitacion', 'fk_habitacion_tipo_habitacion1_idx')
                ->references('idtipo_habitacion')->on('tipo_habitacion')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacion');
    }
}
