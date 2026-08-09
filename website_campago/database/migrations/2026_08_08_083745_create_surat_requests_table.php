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
        Schema::create('surat_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['sku', 'sktm', 'domisili']);
            $table->string('applicant_name');
            $table->text('keperluan');
            $table->json('data');
            $table->string('attachment_path')->nullable();
            $table->enum('status', ['diajukan', 'diproses', 'selesai', 'ditolak'])->default('diajukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_requests');
    }
};
