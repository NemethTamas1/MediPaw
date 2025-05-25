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
        Schema::create('cure_animal', function (Blueprint $table) {
            $table->id();

            //"cure_id" mező
            $table->unsignedBigInteger("cure_id");
            $table->foreign("cure_id")->references("id")->on("cures")->onDelete("cascade");

            //"animal_id" mező
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");

            $table->string("date", 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oltas_allat');

    }
};
