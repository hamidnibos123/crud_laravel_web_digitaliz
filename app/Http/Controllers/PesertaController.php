<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Models\Materi;


class PesertaController extends Controller
{
    function tampil(){
        $peserta = Peserta::get();
        return view('peserta.tampil', compact('peserta'));
    }
    function tambah(){
        return view('peserta.tambah');
    }
    function submit(request $request){
        $peserta = new Peserta();
        $peserta->judul = $request->judul;
        $peserta->deskripsi = $request->deskripsi;
        $peserta->durasi = $request->durasi;
        $peserta->save();

        return redirect()->route('peserta.tampil');

    }

   public function edit($id)
{
    $peserta = Peserta::find($id);

    if (!$peserta) {
        return redirect()->route('peserta.tampil')->with('error', 'Peserta tidak ditemukan');
    }

    return view('peserta.edit', compact('peserta'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'durasi' => 'required|string',
    ]);

    $peserta = Peserta::find($id);

    if (!$peserta) {
        return redirect()->route('peserta.tampil')->with('error', 'Peserta tidak ditemukan');
    }

    $peserta->judul = $request->judul;
    $peserta->deskripsi = $request->deskripsi;
    $peserta->durasi = $request->durasi;
    $peserta->save();

    return redirect()->route('peserta.tampil')->with('success', 'Peserta berhasil diperbarui');
}


    function delete($id){
    $peserta = Peserta::find($id);

    // Periksa apakah peserta ditemukan
    if ($peserta) {
        $peserta->delete(); // Hapus peserta dari database
    }

    // Redirect ke halaman tampil peserta setelah penghapusan
    return redirect()->route('peserta.tampil');
}
    public function show($id)
{
    // Mengambil peserta beserta materi yang terkait
    $peserta = Peserta::with('materi')->findOrFail($id);
    return view('peserta.show', compact('peserta'));
}


}
