<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 220)->unique();
            $table->text('description')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('procedure')->nullable();
            $table->string('duration', 100)->nullable();
            $table->string('cost', 100)->nullable();
            $table->string('service_hours', 255)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('downloadable_form_path', 255)->nullable();
            $table->boolean('is_online')->default(false);
            $table->string('external_url', 500)->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
