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
        Schema::create('face_outs', function (Blueprint $table) {
            $table->id('ID');
            $table->bigIncrements('service_id');
            $table->bigIncrements('performer_id');
            $table->smallInteger('duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('face_outs');
    }
};
