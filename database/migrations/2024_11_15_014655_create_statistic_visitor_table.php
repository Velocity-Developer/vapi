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
        Schema::create('statistic_visitor', function (Blueprint $table) {
            $table->id();
            $table->string('referred')->nullable();
            $table->string('agent')->nullable();
            $table->string('platform')->nullable();
            $table->string('device')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->unsignedInteger('counts')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistic_visitor');
    }
};
