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
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();  // Cria uma chave primária automaticamente
            $table->string('nome_cientifico');  // Nome científico da planta
            $table->string('nome_comum');  // Nome popular da planta
            $table->string('bioma');  // Bioma onde a planta é encontrada
            $table->text('descricao')->nullable();  // Descrição opcional
            $table->timestamps();  // Cria colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
