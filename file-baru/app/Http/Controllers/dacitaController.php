<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dacita; // Import model Dacita

class dacitaController extends Controller
{
    // Menampilkan daftar semua data Dacita
    public function index()
    {
        $dacitas = Dacita::all();
        return view('dacita.index', ['dacitas' => $dacitas]);
    }

    // Menampilkan formulir untuk membuat data Dacita baru
    public function create()
    {
        return view('dacita.create');
    }

    // Menyimpan data Dacita baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:dacitas|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Membuat dan menyimpan data Dacita baru
        $dacita = new Dacita();
        $dacita->name = $validatedData['name'];
        $dacita->email = $validatedData['email'];
        $dacita->password = bcrypt($validatedData['password']);
        $dacita->save();

        return redirect('/dacitas')->with('success', 'Data Dacita telah disimpan.');
    }

    // Menampilkan detail data Dacita berdasarkan ID
    public function show($id)
    {
        $dacita = Dacita::find($id);
        return view('dacita.show', ['dacita' => $dacita]);
    }

    // Menampilkan formulir untuk mengedit data Dacita
    public function edit($id)
    {
        $dacita = Dacita::find($id);
        return view('dacita.edit', ['dacita' => $dacita]);
    }

    // Memperbarui data Dacita berdasarkan ID
    public function update(Request $request, $id)
    {
        // Validasi input dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:dacitas,email,'.$id.',id',
            'password' => 'required|string|min:6',
        ]);

        // Memperbarui data Dacita
        $dacita = Dacita::find($id);
        $dacita->name = $validatedData['name'];
        $dacita->email = $validatedData['email'];
        $dacita->password = bcrypt($validatedData['password']);
        $dacita->save();

        return redirect('/dacitas')->with('success', 'Data Dacita telah diperbarui.');
    }

    // Menghapus data Dacita berdasarkan ID
    public function destroy($id)
    {
        $dacita = Dacita::find($id);
        $dacita->delete();

        return redirect('/dacitas')->with('success', 'Data Dacita telah dihapus.');
    }
}
