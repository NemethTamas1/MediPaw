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

            //"rendelo_id" mező
            $table->unsignedBigInteger("rendelo_id");
            $table->foreign("rendelo_id")->references("id")->on("rendelok");

            //"dolgozo_id" mező
            $table->unsignedBigInteger("dolgozo_id");
            $table->foreign("dolgozo_id")->references("id")->on("dolgozok");
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
