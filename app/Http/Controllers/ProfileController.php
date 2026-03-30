<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman formulir edit profil
     */
    public function edit()
    {
        return view('profile.edit', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Proses update profil pengguna
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        // Validasi data masukan
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            // Menambahkan validasi kata sandi lama (wajib diisi untuk keamanan)
            'current_password' => ['required', 'current_password'],
            // Kata sandi baru opsional, jika diubah maka akan divalidasi
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        // Perbarui nama dan email
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Jika password diisi, hash passwordnya dan update
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // Simpan ke database
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}
