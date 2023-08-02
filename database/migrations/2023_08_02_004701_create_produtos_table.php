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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 5);
            $table->string('name');
            $table->boolean('reducao');
            $table->boolean('schedule');
            $table->boolean('material');
            $table->boolean('norma_constr');
            $table->boolean('grau');
            $table->boolean('pressao');
            $table->boolean('norma_material');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
