<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Kolom "type" tadinya enum tetap (sku/sktm/domisili) -- diubah jadi string bebas
        // supaya bisa menampung slug jenis surat kustom buatan admin juga.
        DB::statement("ALTER TABLE surat_requests MODIFY type VARCHAR(50) NOT NULL");

        Schema::table('surat_requests', function (Blueprint $table) {
            $table->foreignId('surat_template_id')->nullable()->after('type')
                ->constrained('surat_templates')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('surat_requests', function (Blueprint $table) {
            $table->dropConstrainedForeignId('surat_template_id');
        });

        DB::statement("ALTER TABLE surat_requests MODIFY type ENUM('sku', 'sktm', 'domisili') NOT NULL");
    }
};
