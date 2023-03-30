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
        Schema::create('graveyards', function (Blueprint $table) {
            $table->id('graveyard_id');
            $table->string('name', 30);
            $table->bigIncrements('tomb_id');
            $table->foreign('tomb_id')->references('tombs')->on('tomb_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graveyards');
    }
};
