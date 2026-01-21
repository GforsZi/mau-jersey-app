<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materia_jersey', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jersey_id');
            $table->unsignedBigInteger('material_id');
            $table->timestamps();
            $table->foreign('jersey_id')->references('id')->on('jerseys')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('jersey_materials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_jersey');
    }
};
