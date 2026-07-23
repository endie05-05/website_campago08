<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('public_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('category', 100)->nullable();
            $table->text('description')->nullable();
            $table->string('file_path', 255);
            $table->date('document_date')->nullable();
            $table->year('year')->nullable();
            $table->boolean('is_public')->default(true);
            $table->unsignedBigInteger('download_count')->default(0);
            $table->foreignId('uploaded_by')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('public_documents');
    }
};
