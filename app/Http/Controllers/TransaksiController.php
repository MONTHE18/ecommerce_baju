<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function admintransaksi(Request $request){
        $transaksi = transaksi::all();
        $transaksi = new transaksi();
        if ($request->has('search')) {
            $search = $request->input('search');
            $transaksi = $transaksi->where('nama_customer', 'LIKE', '%'.$search.'%');
        }

        //filter data terlama terbaru
        $dataFilter = $request->input('sort_data');
        if ($dataFilter == 'latest') {
            $transaksi->orderBy('id', 'desc');
        }
        $transaksi = $transaksi->paginate(10);
        return view('admin.page.transaksi.admin-transaksi', compact('transaksi'));
    }
    public function showTransaksi(){
        return view('admin.page.transaksi.tambah-datatransaksi', [
            'title' => 'TambahData',
        ]);
    }
    public function createTransaksi(Request $request){
        // Validasi data yang diterima
        $validated =$request->validate([
            'code_transaksi' => 'required|string',
            'total_qty'      => 'required|integer',
            'total_harga'    => 'required|integer',
            'nama_customer'  => 'required|string',
            'alamat'         => 'required|string',
            'no_tlp'         => 'required|string',
            'ekspedisi'      => 'required|string',
            'status'         => 'required|in:Unpaid,Paid',
        ]);

        // Simpan data ke dalam database
        transaksi::create($validated);

        return redirect()->route('admintransaksi');

        
    }

    public function showDetail($id)
    {
        // $products = products::all();
        $transaksi = transaksi::findOrFail($id);

        return view('admin.page.transaksi.detail-data', compact('transaksi'));
    }
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);

        return view('admin.page.transaksi.edit-data', compact('transaksi'));
    }
    public function updateTransaksi(Request $request, $id){

        $transaksi = transaksi::findOrFail($id);
        $transaksi->updateTransaksi($request->all());
        return redirect()->route('admintransaksi')->with('success', 'Data Berhasil DiUpdate');
    
     }

     public function destroy($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();

        return redirect()->route('admintransaksi')->with('success', 'Data Berhasil Dihapus');
    }
    
}
