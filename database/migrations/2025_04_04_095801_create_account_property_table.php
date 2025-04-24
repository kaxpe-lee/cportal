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
        Schema::create('account_property', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->integer('participacion')->nullable();
            $table->date('fecha_adquisicion')->nullable();
            $table->string('cuneta_bancaria')->nullable();
            $table->string('comentarios')->nullable();
            $table->timestamps();

            $table->unique(['account_id', 'property_id']); // Opcional: Evita duplicados
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_property');
    }
};
