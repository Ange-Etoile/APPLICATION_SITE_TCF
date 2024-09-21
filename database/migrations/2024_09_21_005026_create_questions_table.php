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
        Schema::create('questions', function (Blueprint $table) {
            $table->integer('id_question')->index();
            $table->foreignId('id_sujet')->constrained('sujets')->onDelete('cascade');
            $table->string('audio');
            $table->string('proposition1');
            $table->string('proposition2');
            $table->string('proposition3');
            $table->string('proposition4');
            $table->string('nombre_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
