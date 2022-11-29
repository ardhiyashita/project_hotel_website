<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // dd(request('search'));
        // $contents = User::all();
        // if(request('search')) {
        //     $contents->where('name', 'like', '%' . request('search') . '%');
        // }
        $contents = User::all();

        return view('user.index', compact('contents'));
    }

    public function search(Request $request){
        $keyword = $_GET['search'];
        $contents = User::where('name', 'like', '%' . request('search') . '%')->get();
        return view('user.search', compact('contents'));
    }

    public function add(){
        return view('user.add');
    }

    public function addSave(Request $request){
        // dd($test);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->route('user.index')->with('success', 'Berhasil Menambahkan User');
    }

    public function edit($id){
        $content = User::where('id','=',$id)->first();

        return view('user.edit', compact('content'));
    }

    public function editSave(Request $request, $id){
        $temp = User::where('id','=',$id)->get()->first();
        $pass = Hash::make($request->password);

        $temp->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('user.index')->with('success', 'Berhasil Mengubah Master Data Satuan');

    }

    public function delete($id){
        $data = User::find($id);


        // // dd($data);
        $data->delete();
        return redirect()->route('user.index')->with('success', 'Berhasil Menghapus Master Data Satuan');
    }
}
