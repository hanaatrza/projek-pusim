<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Temukan user pertama sebagai tumpuan data dummy
        $user = User::first();
        
        if (!$user) {
            return; // Jika belum ada user, skip seeder
        }

        Ticket::create([
            'user_id' => $user->id,
            'judul' => 'Aduan Jaringan WiFi Perpustakaan',
            'kategori' => 'jaringan',
            'deskripsi' => 'Koneksi WiFi di lantai 2 perpustakaan putus-putus dan sangat lambat.',
            'status' => 'diproses',
            'created_at' => now()->subDays(1),
            'updated_at' => now()->subDays(1),
        ]);

        Ticket::create([
            'user_id' => $user->id,
            'judul' => 'Pembuatan Akun Email Mahasiswa',
            'kategori' => 'akun',
            'deskripsi' => 'Saya mahasiswa baru belum mendapatkan akun email institusi (@student.unmer.ac.id)',
            'status' => 'selesai',
            'created_at' => now()->subDays(3),
            'updated_at' => now(), // updated recently
        ]);

        Ticket::create([
            'user_id' => $user->id,
            'judul' => 'Peminjaman Laboratorium Komputer',
            'kategori' => 'laboratorium',
            'deskripsi' => 'Pengajuan penggunaan lab komputer A untuk praktikum Pemrograman Web kelas B.',
            'status' => 'menunggu',
            'created_at' => now()->subHours(5),
            'updated_at' => now()->subHours(5),
        ]);

        Ticket::create([
            'user_id' => $user->id,
            'judul' => 'Reset Password Siakad',
            'kategori' => 'siakad',
            'deskripsi' => 'Saya lupa password siakad saya dan tidak bisa login.',
            'status' => 'selesai',
            'created_at' => now()->subDays(10),
            'updated_at' => now()->subDays(9),
        ]);
    }
}
