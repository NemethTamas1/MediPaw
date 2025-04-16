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
        Schema::create('oltas_allat', function (Blueprint $table) {
            $table->id();

            //"oltas_id" mező
            $table->unsignedBigInteger("oltas_id");
            $table->foreign("oltas_id")->references("id")->on("oltasok")->onDelete("cascade");

            //"allat_id" mező
            $table->unsignedBigInteger("allat_id");
            $table->foreign("allat_id")->references("id")->on("allatok")->onDelete("cascade");

            $table->string("datum", 100);
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
