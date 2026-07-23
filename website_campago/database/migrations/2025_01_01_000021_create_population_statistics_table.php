<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('population_statistics', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->foreignId('korong_id')->nullable()->constrained('korongs')->nullOnDelete();
            $table->unsignedInteger('total_population')->nullable();
            $table->unsignedInteger('male')->nullable();
            $table->unsignedInteger('female')->nullable();
            $table->unsignedInteger('households')->nullable();
            $table->unsignedInteger('children')->nullable();
            $table->unsignedInteger('productive_age')->nullable();
            $table->unsignedInteger('elderly')->nullable();
            $table->string('source', 255)->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('population_statistics');
    }
};
