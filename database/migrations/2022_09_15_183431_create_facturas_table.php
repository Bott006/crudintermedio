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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paciente')->nullable()
            ->constrained('pacientes')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_usuario')->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->string('numero_factura');
            $table->string('total',10,2);
            $table->enum('tipo', ['FACTURA', 'RECIBO'])->default('FACTURA');
            $table->dateTime('fecha');
            $table->float('tax', 7,2);
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
        Schema::dropIfExists('facturas');
    }
};
