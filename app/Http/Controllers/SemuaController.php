<?php

namespace App\Http\Controllers;

use App\Models\Semua;
use Illuminate\Http\Request;

class SemuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('pages.admin.semua.index', [
            'title' => 'Buku',

        ]);
    } 
    
  public function index_anggota()
    {
       return view('pages.admin.semua.index_anggota', [
            'title' => 'Buku',
                'semuas' => Semua::all(),

        ]);
    } 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.semua.create', [
       
            'buku' => Buku::all(),

        ]);
    } 
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validateData =$request -> validate([
            'username' => 'required'
            'password' => "required|min:5|max:255"
            //'nama_admin' => 'required'
            // 'user_role' => 'required'
            ]);
        validateData['password']= Hash::make($validateData['password']);

        User::create($validateData);

        $input = $request->all();

        User::create($input);
        return redirect::route('semua_index')->with('toast_success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semua $semua)
    {
         return view('pages.admin.semua.show', [
       
            'buku' => $data

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semua $semua)
    {
         $role = Role::all();
        return view('pages.admin.semua.edit', [
            'role' => $role,
           
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semua $semua)
    {
         $validateData =$request -> validate([
            'username' => 'required'
            'password' => "required|min:5|max:255"
            //'nama_admin' => 'required'
            // 'user_role' => 'required'
            ]);
        validateData['password']= Hash::make($validateData['password']);

        User::create($validateData);

        $input = $request->all();

        User::create($input);
        return redirect::route('semua_index')->with('toast_success','Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semua $semua)
    {
        Semua::destroy($semua->id);

        return redirect('/semua')->with('toast_success','Data Berhasil Dihapus');
    }
    }