<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::All();

 return view('pages.admin.admin.index', [
            'admin' => $admin,
         

        ]);   
         }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.admin.admin.create', [
            
   
        ]); 
         }

    /**
     * Store a newly created resource in storage.
     */
  
      public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_admin' => 'required',
          
            
        ]);

        Admin::create([
          'username' =>  $request->username,
            'password' => $request->password,
            'nama_admin' => $request->nama_admin,

              ]);

        return Redirect::route('admin_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

            

    /**
     * Display the specified resource.
     */
      public function show($id)
    {
        $data = Admin::findOrFail($id);

        return view('pages.admin.admin.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $item = Admin::findOrFail($id);
      

        return view('pages.admin.admin.edit', [
            'item' => $item,
               ]);
            
    }



    /**
     * Update the specified resource in storage.
     */
      public function update(Admin $admin, Request $request)
    {
    $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_admin' => 'required',
          
            
        ]);

        $admin->update([
          'username' =>  $request->username,
            'password' => $request->password,
            'nama_admin' => $request->nama_admin,

              ]);
          return redirect()->route('admin_index')->with('toast_success', 'Data berhasil di Rubah ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
     {
        Admin::destroy($admin->id);

        return redirect('/admin')->with('toast_success', 'Data berhasil di Hapus  ');

    }
}
