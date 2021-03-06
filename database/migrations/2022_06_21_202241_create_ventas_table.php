<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('numFactura');
            $table->datetime('fechaVenta');
            $table->integer('totalNeto');
            $table->integer('iva');
            $table->integer('totalIva');
            $table->integer('precioCompra');
            $table->unsignedBigInteger('estado_venta_id')->default(1);
            $table->foreign('estado_venta_id')->references('id')->on('estado_venta')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}