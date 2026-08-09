<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('pengaduan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['nullable', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo_path'] = $request->file('photo')->store('pengaduan', 'public');
        }
        unset($validated['photo']);

        ContactMessage::create($validated);

        return redirect()->route('pengaduan.form')
            ->with('success', 'Pengaduan Anda berhasil dikirim. Terima kasih, laporan akan ditindaklanjuti oleh Kantor Wali Nagari.');
    }

    public function updateStatus(Request $request, ContactMessage $contactMessage)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,read,replied,closed'],
        ]);

        $contactMessage->status = $validated['status'];
        if ($validated['status'] !== 'new' && ! $contactMessage->read_at) {
            $contactMessage->read_at = now();
        }
        $contactMessage->save();

        return redirect('/admin?panel=pengaduan')->with('success', 'Status pengaduan berhasil diperbarui.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        if ($contactMessage->photo_path) {
            Storage::disk('public')->delete($contactMessage->photo_path);
        }

        $contactMessage->delete();

        return redirect('/admin?panel=pengaduan')->with('success', 'Pengaduan berhasil dihapus.');
    }
}
