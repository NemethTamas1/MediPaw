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

            $table->string("name", 100);
            $table->string("address", 100);
            $table->string("phone", 30);
            $table->string("email", 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keepers');
    }
};
