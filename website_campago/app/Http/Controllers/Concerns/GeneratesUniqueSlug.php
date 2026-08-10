<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

trait GeneratesUniqueSlug
{
    private function uniqueSlug(string $modelClass, string $name, ?int $ignoreId): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 2;

        // withTrashed() supaya slug milik data yang sudah di-soft-delete tidak bisa dipakai
        // ulang -- kalau tidak, INSERT baru bisa bentrok "duplicate entry" karena unique index
        // di database tidak tahu-menahu soal kolom deleted_at.
        $usesSoftDeletes = in_array(SoftDeletes::class, class_uses_recursive($modelClass), true);

        while (
            $modelClass::query()
                ->when($usesSoftDeletes, fn ($q) => $q->withTrashed())
                ->where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }
}
