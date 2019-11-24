<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleComprasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->integer('proveedor_producto_id')->unsigned();
            $table->integer('cantidad');
            $table->double('valor_unitario');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->foreign('proveedor_producto_id')->references('id')->on('proveedor_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_compras');
    }
}
