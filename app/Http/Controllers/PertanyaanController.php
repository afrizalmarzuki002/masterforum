<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $listpertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan.applist', compact('listpertanyaan'));
    }
    
    public function create(){
        return view('pertanyaan.appcreate');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('notifsuccess', 'Pertanyaan Berhasil Ditambahkan!');
    }

    public function show($id){
        $detailtanya = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.appdetail', compact('detailtanya'));
    }

    public function edit($id){
        $edittanya = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.appedit', compact('edittanya'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        DB::table('pertanyaan')->where('id', $id)->update([
            'judul' => $request['judul'],
            'isi'   => $request['isi']
        ]);

        return redirect('/pertanyaan')->with('notifsuccess', 'Pertanyaan Berhasil Diperbaharui!');
    }

    public function destroy($id)
    {
        DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('notifsuccess', 'Pertanyaan berhasil dihapus');
    }
}
