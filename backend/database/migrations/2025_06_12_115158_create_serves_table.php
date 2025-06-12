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
        Schema::create('serves', function (Blueprint $table) {
            $table->id();

             //"keeper_id" mező
             $table->unsignedBigInteger("keeper_id");
             $table->foreign("keeper_id")->references("id")->on("keepers")->onDelete("cascade");

              //"user_id" mező
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serves');
    }
};
