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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('type_property');
            $table->integer('rented');
            $table->date('date_adquisition');
            $table->string('referencia_catastro');
            $table->integer('valor_catastro');
            $table->string('address');
            $table->string('address_number');
            $table->string('street_number');
            $table->string('street_type');
            $table->string('city');
            $table->string('province');
            $table->string('cp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
