<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Role;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::All();

 return view('pages.admin.anggota.index', [
            'anggota' => $anggota,
         

        ]);   
         }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.admin.anggota.create', [
            
   
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
          'nama' =>  $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
       
              ]);

        return Redirect::route('anggota_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

            

    /**
     * Display the specified resource.
     */
      public function show($id)
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
            'item' => $item,
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

       
        $anggota->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);

        return redirect()->route('anggota_index')->with('toast_success', 'Data berhasil di Rubah ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
     {
        Anggota::destroy($anggota->id);

        return redirect('/anggota')->with('toast_success', 'Data berhasil di Hapus  ');

    }
    public function generatePDF()
    {
        $anggota = anggota::get();
  
        $data = [
            'anggota' => $anggota,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.anggota.myPDF', $data);
     
        return $pdf->stream();
    } 
    public function excel()
    {
        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data ke dalam sheet
        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('B1', 'Alamat');
        $sheet->setCellValue('C1', 'Email');
       
        $anggota = Anggota::all();
       
        // Isi data pengguna ke dalam sheet
        $row = 2;
        foreach ($anggota as $value) {
            $sheet->setCellValue('A' . $row, $value->nama);
            $sheet->setCellValue('B' . $row, $value->alamat);
            $sheet->setCellValue('C' . $row, $value->email);
           
      

$Writer = new Xlsx($spreadsheet);
$filename = 'anggota.xlsx';
$Writer->save($filename);
return response()->download($filename)->deleteFileAfterSend(true);
    }

}

  }

