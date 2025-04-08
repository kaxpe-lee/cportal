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
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('idioma');
            $table->string('email');
            $table->integer('cuenta_id')->nullable();
            $table->string('telelfono')->nullable();
            $table->string('residencia_direccion')->nullable();
            $table->string('residencia_ciudad')->nullable();
            $table->string('tipo_persona')->nullable();
            $table->string('residencia_provincia')->nullable();
            $table->string('residencia_cp')->nullable();
            $table->string('nie')->nullable();
            $table->string('residencia_pais')->nullable();
            $table->string('residencia_fiscal_pais')->nullable();
            $table->string('pais_nacimiento')->nullable();
            $table->string('ciudad_nacimiento')->nullable();
            $table->string('fecha_nacimiento')->nullable();
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
