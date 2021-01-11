<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertambanganC extends Controller
{
    //tampil data
    public function index(){
        $pertambangan = DB::table('pertambangan')->paginate(5);
        return view('pertambangan.index', ['pertambangan' => $pertambangan]);
    }

    //tambah data
    public function tambah(){
        return view('pertambangan.tambah');
    }

    //simpan data
    public function simpan(Request $request){
        $this->_validation($request);

        DB::insert('insert into pertambangan (nama_brg, tipe_brg, tahun_produksi) values (?, ?, ?)', [$request->nama_brg, $request->tipe_brg, $request->tahun_produksi,]);
        return redirect()->route('tambang')->with('success', 'Data Berhasil Ditambahkan');
    }

    //validasi
    private function _validation(Request $request){
        $validation = $request->validate([
            'nama_brg' => 'required',
            'tipe_brg' => 'required',
            'tahun_produksi' => 'required'
        ],
        [
            'nama_brg.required' => 'Wajib Di Isi',
            'tipe_brg.required'  => 'Wajib Di Isi',
            'tahun_produksi.required'  => 'Wajib Di Isi',
        ]
    );
    }

    //hapus data
    public function delete($id){
        DB::table('pertambangan')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //edit data
    public function edit($id){
        $pertambangan = DB::table('pertambangan')->where('id', $id)->first();
        return view('pertambangan.edit', ['pertambangan' => $pertambangan]);
    }

    public function update(Request $request, $id){
        $this->_validation($request);
        DB::table('pertambangan')->where('id', $id)->update([
            'nama_brg' => $request->nama_brg,
            'tipe_brg' => $request->tipe_brg,
            'tahun_produksi' => $request->tahun_produksi,
        ]);
        return redirect()->route('tambang')->with('success', 'Data Berhasil Di Update');
    }
}
