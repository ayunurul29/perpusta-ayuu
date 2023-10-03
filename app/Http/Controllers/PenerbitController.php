<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.penerbit.index', [
            'title' => 'Penerbit',
            'penerbit' => Penerbit::all(),
        ]);
    }
  public function index_anggota()
    {
        return view('pages.admin.penerbit.index_anggota', [
            'title' => 'Penerbit',
            'penerbits' => Penerbit::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.penerbit.create', [
            'title' => 'Tambah penerbit',
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
            'telepon' => 'required',
            'email' => 'required',
          
        
            
        ]);

        Penerbit::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
    
           

        ]);

        return Redirect::route('penerbit_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $data = Penerbit::findOrFail($id);

        return view('pages.admin.penerbit.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Penerbit::findOrFail($id);

         return view('pages.admin.penerbit.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Penerbit $penerbit, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
          
           
           
        ]);

        $penerbit->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
    
            
        ]);

        return redirect()->route('penerbit_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        Penerbit::destroy($penerbit->id);

        return redirect('/penerbit')->with('toast_success', 'Data Berhasil Dihapus!');
    }

  public function generatePDF()
    {
        $penerbit = penerbit::get();
  
        $data = [
            'penerbit' => $penerbit,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.penerbit.myPDF', $data);
     
        return $pdf->stream();
    }
        // menangkap data pencarian
       public function search(Request $request){
if($request->has('search')){
    $penerbit = Penerbit::where('nama','LIKE',"%".$request->search."%")->get();
}
 
 else{
    $penerbit= Penerbit::all();
 }
   
    return view('pages.admin.penerbit.index',[
        'penerbit' => $penerbit,
    ]);
 
}
//excel 
   public function excel()
    {
        // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Buat sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Isi data ke dalam sheet
  
        $sheet->setCellValue('A1', 'Nama Penerbit');
        $sheet->setCellValue('C1', 'Alamat');
        $sheet->setCellValue('D1', 'Telepon');
        $sheet->setCellValue('E1', 'Email');

        $penerbit = Penerbit::all();
       

        // Isi data pengguna ke dalam sheet
        $row = 2;
        foreach ($penerbit as $p) {
          
            $sheet->setCellValue('A' . $row, $p->nama);
            $sheet->setCellValue('B' . $row, $p->alamat);
            $sheet->setCellValue('C' . $row, $p->telepon);
            $sheet->setCellValue('D' . $row, $p->email);
          
     
            $row++;
        }

$Writer = new Xlsx($spreadsheet);
$filename = 'penerbit.xlsx';
$Writer->save($filename);
return response()->download($filename)->deleteFileAfterSend(true);
    }

}


