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
        Schema::create('has', function (Blueprint $table) {
            $table->id();

            //"keeper_id" mező
            $table->unsignedBigInteger("keeper_id");
            $table->foreign("keeper_id")->references("id")->on("keepers")->onDelete("cascade");

            //"animal_id" mező
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('has');
    }
};
