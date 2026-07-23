<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('potential_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('potential_id')->constrained('potentials')->cascadeOnDelete();
            $table->string('image_path', 255);
            $table->string('caption', 255)->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('potential_images');
    }
};
