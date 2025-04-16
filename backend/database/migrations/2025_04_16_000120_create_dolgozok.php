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
        Schema::create('dolgozok', function (Blueprint $table) {
            $table->id();

            $table->string("nev", 100);
            $table->string("telefon", 30);
            $table->string("role", 20);
            $table->string("beosztas", 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dolgozok');
    }
};
