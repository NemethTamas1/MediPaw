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
        Schema::create('rendelok', function (Blueprint $table) {
            $table->id();
            
            //"dolgozo_id" mező
            $table->unsignedBigInteger("dolgozo_id")->nullable();
            $table->foreign("dolgozo_id")->references("id")->on("dolgozok");

            //"allat_id" mező
            $table->unsignedBigInteger("allat_id")->nullable();
            $table->foreign("allat_id")->references("id")->on("allatok");

            //"gazdi_id" mező
            $table->unsignedBigInteger("gazdi_id");
            $table->foreign("gazdi_id")->references("id")->on("gazdik");



            $table->string("cim", 100);
            $table->string("nyitvatartas", 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendelok');
    }
};
