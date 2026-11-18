<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data siswa
        $siswa = Siswa::all();
        
        // Mengirim data ke view
        return view('siswa.index', ['siswa' => $siswa]);
    }
}
