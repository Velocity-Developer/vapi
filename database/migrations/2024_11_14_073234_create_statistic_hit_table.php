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
        Schema::create('statistic_hit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_website');
            $table->unsignedBigInteger('post_id');
            $table->string('post_type');
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
        Schema::dropIfExists('statistic_hit');
    }
};
