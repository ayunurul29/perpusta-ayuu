<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;
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
  public function generatePDF()
    {
        $admin = Admin::get();
  
        $data = [
            'admin' => $admin,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.admin.myPDF', $data);
     
        return $pdf->stream();
    } 
    public function excel()
    {
        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data ke dalam sheet
        $sheet->setCellValue('A1', 'Nama Admin');
        $sheet->setCellValue('B1', 'Password');
        $sheet->setCellValue('C1', 'Username');
       
        $admin = Admin::all();
       
        // Isi data pengguna ke dalam sheet
        $row = 2;
        foreach ($admin as $value) {
            $sheet->setCellValue('A' . $row, $value->nama_admin);
            $sheet->setCellValue('B' . $row, $value->password);
            $sheet->setCellValue('C' . $row, $value->username);
           
      

$Writer = new Xlsx($spreadsheet);
$filename = 'admin.xlsx';
$Writer->save($filename);
return response()->download($filename)->deleteFileAfterSend(true);
    }

}

  }
//excel 
  