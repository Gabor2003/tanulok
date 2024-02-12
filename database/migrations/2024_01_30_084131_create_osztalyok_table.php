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
        Schema::create('osztalyok', function (Blueprint $table) {
            $table->id();
            $table->text('Osztalyok');
            $table->string('agazat');
            $table->string('szakma');
            $table->integer('maxletszam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osztalyok');
    }
};
