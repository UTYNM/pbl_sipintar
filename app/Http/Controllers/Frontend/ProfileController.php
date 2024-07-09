<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil data pengguna yang sedang login
        $user = auth()->user();

        // Tampilkan halaman profil pengguna
        return view('content.frontend.profile.index', compact('user'));
    }

    /**
     * Show the form for editing the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Tampilkan halaman edit profil dengan data pengguna
        return view('content.frontend.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user record
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->district_id = $request->district_id;
        $user->email = $request->email;
        $user->save();

        // Redirect to the profile edit page with a success message
        return redirect()->route('profile.index', $id)->with('success', 'Profil berhasil diperbarui.');
    }
}

