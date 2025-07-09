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
            $table->foreignId("artist_id")->constrained()->onDelete("cascade");
            $table->string("name", 100);
            $table->string("type", 50);
            $table->text("description");
            $table->string("image_path", 100)->nullable();

            //morph
            $table->nullableMorphs('merchable');
            $table->string("image_url", 255);
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('merches');
    }
};
