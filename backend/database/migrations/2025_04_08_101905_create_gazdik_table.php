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
        Schema::create('gazdik', function (Blueprint $table) {
            $table->id();
            $table->string("nev", 100);
            $table->string("cim", 100);
            $table->string("telefon", 30);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gazdik');
    }
};
