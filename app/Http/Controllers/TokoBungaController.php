<?php

namespace App\Http\Controllers;

use App\Models\toko_bunga;
use Illuminate\Http\Request;

class TokoBungaController extends Controller
{
    public function utama(){
        return view('utama');
    }

    public function index(){
        $data = toko_bunga::all();
        return view('beranda',compact('data'));
    }
    
    public function catalog(){
        $data = toko_bunga::all();
        return view('catalog',compact('data'));
    }


    public function tambahbunga(){
        return view('tambah');
    }

    public function insertbunga(Request $request){
        $data = toko_bunga::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotobunga/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('index')->with('succes','data sberhasil di tambahkan');
    }

    public function edittampil($id){
        $data = toko_bunga::find($id);
        return view('update', compact('data'));
    }

    public function update(Request $request, $id){
        $data = toko_bunga::find($id);
        $data->update($request->all());
        return redirect()->route('index')->with('succes','data sberhasil di update');
    }

    public function delete($id){
        $data = toko_bunga::find($id);
        $data->delete();
        return redirect()->route('index')->with('succes','data sberhasil di hapus');
    }
}
