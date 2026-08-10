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
        Schema::table('surat_requests', function (Blueprint $table) {
            $table->string('ktp_path')->nullable()->after('attachment_path');
            $table->string('kk_path')->nullable()->after('ktp_path');
        });

        Schema::table('surat_requests', function (Blueprint $table) {
            $table->dropColumn('attachment_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_requests', function (Blueprint $table) {
            $table->string('attachment_path')->nullable();
        });

        Schema::table('surat_requests', function (Blueprint $table) {
            $table->dropColumn(['ktp_path', 'kk_path']);
        });
    }
};
