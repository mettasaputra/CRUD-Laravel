<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bimbingan;
class BimbinganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cekstatus');
    }

    public function index()
    {
        $bimbingan = Bimbingan::all();
        return view('bimbingan.index', compact('bimbingan'));
    }

    public function create()
    {
        return view('bimbingan.input');
    }

    public function store(Request $request)
    {
        $bimbingan = new Bimbingan();
        $bimbingan->mahasiswa       = $request->mahasiswa;
        $bimbingan->prodi           = $request->prodi;
        $bimbingan->dosen           = $request->dosen;
        $bimbingan->materi_bimbingan= $request->materi_bimbingan;
        $now = date('Y-m-d H:i');
        $bimbingan->tgl_bimbingan   = $now;
        $bimbingan->save();

        return redirect("bimbingan")->with('status', 'Data berhasil disimpan!');
    }
    
    public function edit(Bimbingan $bimbingan)
    {
        return view('bimbingan.update', compact('bimbingan'));

    }

    public function update(Request $request, $id)
    {
        $bimbingan = Bimbingan::find($id);
        $bimbingan->mahasiswa       = $request->mahasiswa;
        $bimbingan->prodi           = $request->prodi;
        $bimbingan->dosen           = $request->dosen;
        $bimbingan->materi_bimbingan = $request->materi_bimbingan;
        $now = date('Y-m-d H:i');
        $bimbingan->tgl_bimbingan   = $now;
        $bimbingan->save();

        return redirect("bimbingan")->with('status', 'Data berhasil diupdate!');
    }

    public function destroy(Bimbingan $bimbingan)
    {
        $bimbingan->delete();
        return redirect("bimbingan")->with('status', 'Data berhasil dihapus!');
    }
}
