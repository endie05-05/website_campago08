<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_category_id')->constrained('location_categories')->cascadeOnDelete();
            $table->foreignId('korong_id')->nullable()->constrained('korongs')->nullOnDelete();
            $table->string('name', 200);
            $table->string('slug', 220)->unique();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('phone', 30)->nullable();
            $table->string('opening_hours', 255)->nullable();
            $table->string('google_maps_url', 500)->nullable();
            $table->string('image_path', 255)->nullable();
            $table->string('source', 150)->nullable();
            $table->dateTime('last_verified_at')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
            $table->index('is_verified');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
