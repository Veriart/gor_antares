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
        Schema::create('gymnasia', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('type', ['Single Field', 'Multiple Field']);
            $table->string('open', 15);
            $table->string('close', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gymnasium');
    }
};
