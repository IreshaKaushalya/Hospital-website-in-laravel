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
        Schema::create('prescriptions', function (Blueprint $table) {
          $table->id(); 
            $table->string('date')->nullable();
            $table->string('nic')->nullable();
            $table->string('name')->nullable();
            $table->string('Age')->nullable();     
            $table->string('disease')->nullable();
            $table->string('medicine')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
