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
        Schema::create('dolgozik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orvos_id");
            $table->unsignedBigInteger("rendelo_id");
            $table->foreign("orvos_id")->references("id")->on("orvosok");
            $table->foreign("rendelo_id")->references("id")->on("rendelok");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dolgozik');
    }
};
