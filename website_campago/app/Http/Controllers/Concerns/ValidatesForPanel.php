<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

trait ValidatesForPanel
{
    /**
     * Sama seperti $request->validate(), tapi kalau validasi gagal, tetap kembali ke
     * panel admin yang sedang dibuka -- bukan ke tab Dashboard. Ini perlu karena
     * perpindahan antar tab di dashboard admin murni lewat JS (URL browser tidak pernah
     * berubah dari /admin), jadi redirect back() bawaan Laravel (yang mengandalkan header
     * Referer) selalu balik ke /admin polos dan menampilkan tab Dashboard.
     */
    protected function validatePanel(Request $request, string $panel, array $rules): array
    {
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            throw (new ValidationException($validator))
                ->redirectTo(url("/admin?panel={$panel}"));
        }

        return $validator->validated();
    }
}
