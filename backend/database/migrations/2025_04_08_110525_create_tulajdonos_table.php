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
        Schema::create('tulajdonos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("gazdi_id");
            $table->unsignedBigInteger("allat_id");
            $table->foreign("gazdi_id")->references("id")->on("gazdik")->onDelete("cascade");
            $table->foreign("allat_id")->references("id")->on("allatok")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tulajdonos');
    }
};
