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
        Schema::create('statistic_visit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_website');
            $table->date('date');
            $table->integer('counts')->default(0);
            $table->foreign('id_website')->references('id')->on('websites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistic_visit');
    }
};
