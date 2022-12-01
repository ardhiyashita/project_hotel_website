<?php

namespace App\Http\Controllers;

use App\HotelTransaction;
use Illuminate\Http\Request;

class HotelTransactionController extends Controller
{
    
    public function list(Type $var = null)
    {
        return view('hotel_transaction.list');
    }

    public function add(Type $var = null)
    {
        return view('hotel_transaction.add');
    }

    public function save_add(Request $request){

        $request->validate([
        'satuan' => 'required',
        'supplier' => 'required',
        'kategori' => 'required',
        'kode' => 'required',
        'nama' => 'required',
        'stok' => 'required',
        'beli' => 'required',
        'jual' => 'required',
        ]);

        HotelTransaction::create([
            'satuan_id' => $request->satuan,
            'supplier_id' => $request->supplier,
            'category_id' => $request->kategori,
            'kode' => $request->kode,
            'nama_barang' => $request->nama,
            'stok' => $request->stok,
            'harga_beli' => $request->beli,
            'harga_jual' => $request->jual,
        ]);

        return redirect()->route('hotel_transaction_list');
    }

}
