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
        Schema::create('merches', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artist_id")->constrained();
            $table->string("name", 100);
            $table->text("description");
            $table->string("type", 30);
            $table->string("image_url", 255);
            $table->nullableMorphs('merchable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merches');
    }
};
