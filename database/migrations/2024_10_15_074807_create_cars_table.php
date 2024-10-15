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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('horse_power');
            $table->string('class_auto');
            $table->string('transmission');
            $table->string('conditioner');
            $table->string('drive');
            $table->string('type_fuel');
            $table->string('consumption');
            $table->string('color');
            $table->string('audio');
            $table->string('year');
            $table->string('price');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
