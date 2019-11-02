<?php

namespace App\Http\Controllers;
use App\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
    	$mahasiswa = Mahasiswa::paginate(5);
    	return view('welcome',compact('mahasiswa'));
    }

    public function create(){

    	return view('create');

    }

    public function store(Request $request){
    	$this->validate($request,[
    	'nim' => 'required',
    	'nama' => 'required',
    	'jurusan' => 'required',
    	'notelp' => 'required'
    	]);

    	$mhs = new Mahasiswa;
    	$mhs->nim = $request->nim;
    	$mhs->nama = $request->nama;
    	$mhs->jurusan = $request->jurusan;
    	$mhs->telepon = $request->notelp;
    	$mhs->save();
    	return redirect(route('home'))->with('successMsg','Data Berhasil Disimpan');

    }

    public function edit($id){
    	$mahasiswa = Mahasiswa::find($id);
    	return view('edit',compact('mahasiswa'));
    }

    public function update(Request $request, $id){
		$this->validate($request,[
    	'nim' => 'required',
    	'nama' => 'required',
    	'jurusan' => 'required',
    	'notelp' => 'required'
    	]);

    	$mhs = Mahasiswa::find($id);
    	$mhs->nim = $request->nim;
    	$mhs->nama = $request->nama;
    	$mhs->jurusan = $request->jurusan;
    	$mhs->telepon = $request->notelp;
    	$mhs->save();
    	return redirect(route('home'))->with('successMsg','Data Berhasil Diubah');
    }

    public function delete($id){

        Mahasiswa::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Data Berhasil Dihapus');
    }
}
