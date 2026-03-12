<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function kelolaTugasGuru()
    {
        return view('pages.guru.kelola-tugas');
    }

    public function detailTugasGuru()
    {
        return view('pages.guru.detail-tugas');
    }

    public function createTugasGuru(){
        return view('pages.guru.create-tugas');
    }

    public function addTugasGuru(Request $request){
        $request->validate([
            'judul' => 'required|string|max:255',
            'mapel_id' => 'required',
            'kelas_id' => 'required',
            'deadline' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        Tugas::create([
            'judul' => $request->judul,
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('guru.kelola-tugas')->with('success', 'Tugas berhasil ditambahkan!');
    }


}
