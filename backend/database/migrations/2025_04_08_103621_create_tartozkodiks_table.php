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
        Schema::create('tartozkodik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("allat_id");
            $table->unsignedBigInteger("rendelo_id");
            $table->foreign("allat_id")->references("id")->on("allatok");
            $table->foreign("rendelo_id")->references("id")->on("rendelok");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tartozkodik');
    }
};
