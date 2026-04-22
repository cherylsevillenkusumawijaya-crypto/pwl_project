<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}

PHP 
public function create ()
{
    return view('mahasiswa.create');
}
<h2>Form Mahasiswa</h2>
<form>
Nama Lengkap: <input type="text"><br><br>
NIM: <input type="text"><br><br>
NISN: <input type="text"<br><br>
Tempat Lahir: <input type="date"><br><br>
Tanggal Lahir: <input type="date"<br><br>
Alamat: <textarea></textarea><br><br>
<button type="submit">simpan<button>
</form>