<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $totalLayanan = Ticket::where('user_id', $userId)->count();
        $layananMenunggu = Ticket::where('user_id', $userId)->whereIn('status', ['menunggu', 'diproses'])->count();
        $layananSelesai = Ticket::where('user_id', $userId)->where('status', 'selesai')
                                ->whereMonth('updated_at', Carbon::now()->month)->count();
        
        // Notifikasi baru: tiket yang diupdate (misalnya selesai/diproses) dalam 2 hari terakhir
        $notifikasiBaru = Ticket::where('user_id', $userId)->where('updated_at', '>=', Carbon::now()->subDays(2))->count();
        
        $tickets = Ticket::where('user_id', $userId)->latest()->limit(5)->get();

        return view('dashboard', compact(
            'totalLayanan', 
            'layananMenunggu', 
            'layananSelesai', 
            'notifikasiBaru',
            'tickets'
        ));
    }
}
