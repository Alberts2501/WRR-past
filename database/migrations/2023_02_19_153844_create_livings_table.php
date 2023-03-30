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
        Schema::create('livings', function (Blueprint $table) {
            $table->id('living_id');
            $table->string('e_mail', 50);
            $table->char('phone_number', 12);
            $table->bigIncrements('man_id');
            $table->foreign('man_id')->references('men')->on('man_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livings');
    }
};
