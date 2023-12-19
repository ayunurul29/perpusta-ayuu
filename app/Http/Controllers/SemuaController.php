<?php

namespace App\Http\Controllers;

use App\Models\Semua;
use App\Models\Role;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PDF;
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
            'title' => 'Tambah role',
                 'role' => Role::all(),
   
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
       $role = Role::All();

        return view('pages.admin.semua.edit', [
            'item' => $item,
                 'role' => $role,
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
        semua::destroy($semua->id);

        return redirect('/semua')->with('toast_success', 'Data berhasil di Hapus  ');

    }
    public function generatePDF()
    {
        $semua = Semua::get();
  
        $data = [
            'semua' => $semua,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.semua.myPDF', $data);
     
        return $pdf->stream();
    }
    //excel 
   public function excel()
    {
        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data ke dalam sheet
        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('C1', 'Username');
        $sheet->setCellValue('B1', 'Password');
        $sheet->setCellValue('D1', 'User Role');
     
        $semuas = Semua::with('role')->get();
      
        // Isi data pengguna ke dalam sheet
        $row = 2;
        foreach ($semuas as $value) {
            $sheet->setCellValue('A' . $row, $value->nama);
            $sheet->setCellValue('B' . $row, $value->username);
            $sheet->setCellValue('D' . $row, $value->password);
            $sheet->setCellValue('C' . $row, $value->role->role);
      
        }

$Writer = new Xlsx($spreadsheet);
$filename = 'semua.xlsx';
$Writer->save($filename);
return response()->download($filename)->deleteFileAfterSend(true);
    }

}