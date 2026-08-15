<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surat_template_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surat_template_id')->constrained('surat_templates')->cascadeOnDelete();
            $table->string('label', 150);
            $table->string('field_key', 100);
            $table->string('type', 30)->default('text');
            $table->text('options')->nullable();
            $table->boolean('is_required')->default(true);
            $table->boolean('is_applicant_name')->default(false);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surat_template_fields');
    }
};
