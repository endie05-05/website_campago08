<?php

use App\Models\SuratTemplate;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        SuratTemplate::whereIn('slug', ['sku', 'sktm', 'domisili'])->update(['is_builtin' => false]);

        SuratTemplate::orderBy('sort_order')->orderBy('id')->get()
            ->values()
            ->each(fn (SuratTemplate $template, int $index) => $template->update(['sort_order' => $index]));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        SuratTemplate::whereIn('slug', ['sku', 'sktm', 'domisili'])->update(['is_builtin' => true]);
    }
};
