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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            
            //"animal_id" mező
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animals");

            //"worker_id" mező
            $table->unsignedBigInteger("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
            
            //"clinic_id" mező
            $table->unsignedBigInteger("clinic_id");
            $table->foreign("clinic_id")->references("id")->on("clinics");

            $table->string("date", 100)->nullable();
            $table->boolean("paid");
            $table->text("description")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
