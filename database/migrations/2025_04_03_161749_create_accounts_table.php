<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->integer('ncliente')->nullable();
            $table->string('idioma')->nullable();
            $table->string('tipo_cliente')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('nie')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('residencia_ue')->nullable();
            $table->string('residencia_fiscal_pais')->nullable();
            $table->string('residencia_direccion')->nullable();
            $table->string('residencia_provincia')->nullable();
            $table->string('residencia_ciudad')->nullable();
            $table->string('residencia_cp')->nullable();
            $table->string('residencia_pais')->nullable();
            
            $table->string('fecha_nacimiento')->nullable();
            $table->string('ciudad_nacimiento')->nullable();
            $table->string('pais_nacimiento')->nullable();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
