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
        Schema::create('keepers', function (Blueprint $table) {
            $table->id();

            //"gazdi_id" mező
            $table->unsignedBigInteger("owner_id");
            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");

            //"allat_id" mező
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keeper');
    }
};
