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
        Schema::create('allatok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("gazdi_id");
            $table->foreign("gazdi_id")->references("id")->on("gazdik");
            $table->boolean("oltva");
            $table->string("nev", 100);
            $table->integer("kor");
            $table->string("fajta", 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allatok');
    }
};
