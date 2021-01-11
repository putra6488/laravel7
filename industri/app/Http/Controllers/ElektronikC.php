<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElektronikC extends Controller
{
    //tampil data
    public function index(){
        $elektronik = DB::table('elektronik')->paginate(5);
        return view('elektronik.index', ['elektronik' => $elektronik]);
    }

    //tambah data
    public function tambah(){
        return view('elektronik.tambah');
    }

    //simpan data
    public function simpan(Request $request){
        $this->_validation($request);

        DB::insert('insert into elektronik (nama_brg, harga_brg, merk_brg, tipe_brg, jumlah_brg) values (?, ?, ? , ?, ?)', [$request->nama_brg, $request->harga_brg, $request->merk_brg, $request->tipe_brg, $request->jumlah_brg,]);
        return redirect()->route('elektro')->with('success', 'Data Berhasil Ditambahkan');
    }

    //hapus data
    public function delete($id){
        DB::table('elektronik')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    private function _validation(Request $request){
        $validation = $request->validate([
            'nama_brg' => 'required',
            'harga_brg' => 'required',
            'merk_brg' => 'required',
            'tipe_brg' => 'required',
            'jumlah_brg' => 'required'
        ],
        [
            'nama_brg.required' => 'Wajib Di Isi',
            'harga_brg.required' => 'Wajib Di Isi',
            'merk_brg.required'  => 'Wajib Di Isi',
            'tipe_brg.required'  => 'Wajib Di Isi',
            'jumlah_brg.required'  => 'Wajib Di Isi',
        ]
    );
    }

    //edit data
    public function edit($id){
        $elektronik = DB::table('elektronik')->where('id', $id)->first();
        return view('elektronik.edit', ['elektronik' => $elektronik]);
    }

    public function update(Request $request, $id){
        $this->_validation($request);
        DB::table('elektronik')->where('id', $id)->update([
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'merk_brg' => $request->merk_brg,
            'tipe_brg' => $request->tipe_brg,
            'jumlah_brg' => $request->jumlah_brg,
        ]);
        return redirect()->route('elektro')->with('success', 'Data Berhasil Di Update');
    }
}
