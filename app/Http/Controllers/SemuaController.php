<?php

namespace App\Http\Controllers;

use App\Models\Semua;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SemuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semua = Semua::All();

 return view('pages.admin.semua.index', [
            'semua' => $semua,
         

        ]);   
         }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.admin.semua.create', [
            
   
        ]); 
         }

    /**
     * Store a newly created resource in storage.
     */
  
      public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'user_role' => 'required',
          
            
        ]);

        Semua::create([
             'nama' => $request->nama,
             'username' =>  $request->username,
             'password' => $request->password,
             'user_role' => $request->user_role,
           

              ]);

        return Redirect::route('semua_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

            

    /**
     * Display the specified resource.
     */
      public function show($id)
    {
        $data = Semua::findOrFail($id);

        return view('pages.admin.semua.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $item = Semua::findOrFail($id);
      

        return view('pages.admin.semua.edit', [
            'item' => $item,
               ]);
            
    }



    /**
     * Update the specified resource in storage.
     */
      public function update(Semua $semua, Request $request)
    {
    $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'user_role' => 'required',
           
            
        ]);

        $semua->update([
             'nama' => $request->nama,
             'username' =>  $request->username,
             'password' => $request->password,
             'user_role' => $request->user_role,
           
              ]);
          return redirect()->route('semua_index')->with('toast_success', 'Data berhasil di Rubah ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semua $semua)
     {
        Admin::destroy($semua->id);

        return redirect('/semua')->with('toast_success', 'Data berhasil di Hapus  ');

    }
}
