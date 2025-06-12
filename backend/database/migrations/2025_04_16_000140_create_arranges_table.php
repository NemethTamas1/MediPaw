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
        Schema::create('arranges', function (Blueprint $table) {

            //"animal_id" mező
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");

            $table->integer("price");
            $table->text("description");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arranges');
    }
};
