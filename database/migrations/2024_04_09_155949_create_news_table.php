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
        Schema::create('news', function (Blueprint $table) {
           $table->id();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('adder')->nullable();
            $table->string('date')->nullable();
            $table->string('Himage')->nullable();
            $table->string('Aimage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
