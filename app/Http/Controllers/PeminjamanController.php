<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Redirect;
use PDF;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $peminjaman = Peminjaman::all();

        return view('pages.admin.peminjaman.index', [
            'peminjaman' => $peminjaman,
        ]);
    }
   public function index_anggota()
    {
      $peminjaman = Peminjaman::all();

        return view('pages.admin.peminjaman.index_anggota', [
            'peminjamans' => $peminjaman,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.peminjaman.create', [
            'title' => 'Tambah peminjaman',
            'buku' => Buku::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'id_status_peminjaman' => 'required',
            
        ]);

        Peminjaman::create([
            'id_buku' => $request->id_buku,
            'id_anggota' => $request->id_anggota,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
            'id_status_peminjaman' => $request->id_status_peminjaman,


        ]);

        return Redirect::route('peminjaman_index')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       
        $data = Peminjaman::findOrFail($id);

        return view('pages.admin.peminjaman.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Peminjaman::findOrFail($id);
        $buku = Buku::all();


         return view('pages.admin.peminjaman.edit', [
            'item' => $item,
              'buku' => $buku,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman )
    {
        $request->validate([
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'id_status_peminjaman' => 'required',
           
        ]);

        $peminjaman->update([
            'id_buku' => $request->id_buku,
            'id_anggota' => $request->id_anggota,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
            'id_status_peminjaman' => $request->id_status_peminjaman,

            
        ]);

        return redirect()->route('peminjaman_index')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        Peminjaman::destroy($peminjaman->id);

        return redirect('/peminjaman')->with('toast_success', 'Data Berhasil Dihapus!');
    }
  public function generatePDF()
    {
        $peminjaman = peminjaman::get();
  
        $data = [
            'peminjaman' => $peminjaman,
        ]; 
            
        $pdf = PDF::loadView('pages.admin.peminjaman.myPDF', $data);
     
        return $pdf->stream();
    }
  public function search(Request $request)
{
    // menangkap data pencarian
if($request->has('search')){
    $peminjaman = Peminjaman::where('tanggal_kembali','LIKE',"%".$request->search."%")->get();
}
 
 else{
    $peminjaman= Peminjaman::all();
 }
   
    return view('pages.admin.peminjaman.index',[
        'peminjaman' => $peminjaman,
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
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Buku');
        $sheet->setCellValue('C1', 'Anggota');
        $sheet->setCellValue('D1', 'Tanggal Pinjam');
        $sheet->setCellValue('E1', 'Tanggal Kembali');
        $sheet->setCellValue('F1', 'Denda');
        $sheet->setCellValue('G1', 'Status Peminjaman');

        $peminjaman = Peminjaman::with('buku')->get();
      
        // Isi data pengguna ke dalam sheet
        $row = 2;
        foreach ($peminjaman as $pinjam) {
            $sheet->setCellValue('A' . $row, $pinjam->buku->nama);
            $sheet->setCellValue('B' . $row, $pinjam->id_anggota);
            $sheet->setCellValue('D' . $row, $pinjam->tanggal_pinjam);
            $sheet->setCellValue('C' . $row, $pinjam->tanggal_kembali);
            $sheet->setCellValue('E' . $row, $pinjam->denda);
            $sheet->setCellValue('F' . $row, $pinjam->id_status_peminjaman);
        }

$Writer = new Xlsx($spreadsheet);
$filename = 'pinjam.xlsx';
$Writer->save($filename);
return response()->download($filename)->deleteFileAfterSend(true);
    }

}

