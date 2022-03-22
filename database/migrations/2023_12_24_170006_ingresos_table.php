<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('ing_id');
            $table->date('ing_fecha');
            $table->string('ing_tipo');
            $table->string('ing_cantidad');
            $table->string('ing_detalle');
            $table->foreignid('tip_id')->references('tip_id')->on('tipos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                               Schema::dropIfExists('ingresos');
    }
}
