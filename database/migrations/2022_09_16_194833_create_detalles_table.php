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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura')->nullable()->constrained('facturas')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_articulo')->nullable()->constrained('articulos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->integer('detalle_cantidad');
            $table->decimal('precio_venta',8,2);
            $table->decimal('precio_compra',8,2);
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
        Schema::dropIfExists('detalles');
    }
};
