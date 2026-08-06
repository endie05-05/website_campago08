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
        Schema::table('potentials', function (Blueprint $table) {
            $table->enum('card_size', ['besar', 'kecil'])->default('kecil')->after('featured_image_path');
            $table->unsignedSmallInteger('sort_order')->default(0)->after('card_size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('potentials', function (Blueprint $table) {
            $table->dropColumn(['card_size', 'sort_order']);
        });
    }
};
