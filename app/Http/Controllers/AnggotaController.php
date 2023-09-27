<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.anggota.index', [
            'title' => 'Anggota',
            'anggota' => Anggota::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.anggota.create', [
            'title' => 'Tambah anggota',
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
           
        ]);

        Anggota::create([
             'nama' => $request->nama,
             'alamat' => $request->alamat,
             'email' => $request->email,

        ]);

        return Redirect::route('anggota_index')->with('toast_success', 'Data berhasil di tambahkan  ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
         $data = Anggota::findOrFail($id);

        return view('pages.admin.anggota.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Anggota::findOrFail($id);

         return view('pages.admin.anggota.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Anggota $anggota, Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
           
        ]);

         Anggota::create([
             'nama' => $request->nama,
             'alamat' => $request->alamat,
             'email' => $request->email,

        ]);

        return redirect()->route('anggota_index')->with('toast_success', 'Data berhasil di edit  ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);

        return redirect('/anggota')->with('toast_success', 'Data berhasil di Hapus  ');

    }
}