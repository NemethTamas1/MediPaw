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
        Schema::create('kezelesek', function (Blueprint $table) {
            $table->id();
            
            //"allat_id" mező
            $table->unsignedBigInteger("allat_id");
            $table->foreign("allat_id")->references("id")->on("allatok");

            //"dolgozo_id" mező
            $table->unsignedBigInteger("dolgozo_id");
            $table->foreign("dolgozo_id")->references("id")->on("dolgozok");
            
            //"rendelo_id" mező
            $table->unsignedBigInteger("rendelo_id");
            $table->foreign("rendelo_id")->references("id")->on("rendelok");

            $table->string("datum", 100)->nullable();
            $table->boolean("kifizetve");
            $table->text("leiras")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kezelesek');
    }
};
