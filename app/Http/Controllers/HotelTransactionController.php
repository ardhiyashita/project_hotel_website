<?php

namespace App\Http\Controllers;

use App\HotelTransaction;
use Illuminate\Http\Request;

class HotelTransactionController extends Controller
{
    
    public function list(Type $var = null)
    {
        $list = HotelTransaction::all();
        return view('hotel_transaction.list', compact('list'));
    }

    public function add(Type $var = null)
    {
        return view('hotel_transaction.add');
    }

    public function save_add(Request $request){

        $request->validate([
        'train_code' => 'required',
        'train_date' => 'required',
        'clean' => 'required',
        'soil' => 'required',
        'stain' => 'required',
        'torn' => 'required',
        'train_status' => 'required',
        'delivery_status' => 'required',
        ]);

        HotelTransaction::create([
            'train_code' => $request->train_code,
            'train_date' => $request->train_date,
            'clean' => $request->clean,
            'soil' => $request->soil,
            'stain' => $request->stain,
            'torn' => $request->torn,
            'train_status' => $request->train_status,
            'delivery_status' => $request->delivery_status,
        ]);

        return redirect()->route('hotel_transaction_list');
    }

}
