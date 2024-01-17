<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.form.index'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim'           => 'required|string',
            'nama'          => 'required|string',
            'jenis_kelamin' => 'required|in:Laki Laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir'  => 'required|string',
            'jurusan'       => 'required|string',
            'tahun_masuk'   => 'required|integer',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('form.index')->with('success', 'Data Mahasiswa berhasil disimpan!');
    }



    public function show($id){
        $datas = Mahasiswa::all();
        return view('pages.form.edit', compact('datas'));    
    }

    public function edit($id){
        $datas = Mahasiswa::findOrFail($id);
        return view('pages.form.show', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nim'           => 'required|string',
            'nama'          => 'required|string',
            'jenis_kelamin' => 'required|in:Laki Laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir'  => 'required|string',
            'jurusan'       => 'required|string',
            'tahun_masuk'   => 'required|integer',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validatedData);

        return redirect()->route('form.showTable')->with('success', 'Data Mahasiswa berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->delete();

        return redirect()->route('form.showTable')->with('success', 'Data Mahasiswa berhasil dihapus!');
    }
}