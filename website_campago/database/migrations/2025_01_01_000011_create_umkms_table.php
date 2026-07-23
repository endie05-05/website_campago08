<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('korong_id')->nullable()->constrained('korongs')->nullOnDelete();
            $table->string('name', 200);
            $table->string('slug', 220)->unique();
            $table->string('owner_name', 150)->nullable();
            $table->string('category', 100)->nullable();
            $table->longText('description')->nullable();
            $table->text('address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('whatsapp', 30)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('tiktok', 255)->nullable();
            $table->string('marketplace_url', 500)->nullable();
            $table->string('google_maps_url', 500)->nullable();
            $table->boolean('nib_status')->default(false);
            $table->enum('halal_status', ['belum', 'proses', 'terbit'])->nullable();
            $table->boolean('qris_status')->default(false);
            $table->string('featured_image_path', 255)->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index('category');
            $table->index('status');
            $table->index('is_verified');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
