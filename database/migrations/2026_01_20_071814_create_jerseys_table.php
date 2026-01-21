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
        Schema::create('jerseys', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('stock_keeping_unit');
            $table->text('description');
            $table->string('minimum_order');
            $table->string('price');
            $table->enum('status', ['tersedia', 'terjual', 'tidak_aktif']);
            $table->unsignedBigInteger('primary_color_id');
            $table->unsignedBigInteger('primary_material_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('primary_color_id')->references('id')->on('jersey_primary_colors')->onDelete('cascade');
            $table->foreign('primary_material_id')->references('id')->on('jersey_materials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jerseys');
    }
};
