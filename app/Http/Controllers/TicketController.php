<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'file-upload' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:5120',
        ]);

        $ticket = new Ticket();
        $ticket->user_id = Auth::id();
        $ticket->judul = $validated['judul'];
        $ticket->kategori = $validated['kategori'];
        $ticket->deskripsi = $validated['deskripsi'];
        
        if ($request->hasFile('file-upload')) {
            $path = $request->file('file-upload')->store('tickets', 'public');
            $ticket->lampiran = $path;
        }

        $ticket->save();

        return redirect()->route('dashboard')->with('success', 'Tiket berhasil dikirim! Tim PUSIM akan segera memproses laporan Anda.');
    }
}
