<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Support\Str;

trait GeneratesUniqueSlug
{
    private function uniqueSlug(string $modelClass, string $name, ?int $ignoreId): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 2;

        while (
            $modelClass::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }
}
