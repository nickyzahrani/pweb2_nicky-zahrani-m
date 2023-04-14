<?php

namespace App\Http\Controllers;

use App\Models\SewaModel;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index()
    {
        $SewaModel = SewaModel::all();
        return view('table',compact(['SewaModel']));
    }
    public function index2()
    {
        $SewaModel = SewaModel::all();
        return view('lihat',compact(['SewaModel']));
    }

    public function tambahdata()
    {
        return view('form');
    }

    public function insertdata(Request $request)
    {
        $data = $request->all();
        $SewaModel = new SewaModel();
        $SewaModel->nama_penyewa = $data['nama_penyewa'];
        $SewaModel->no_telp = $data['no_telp'];
        $SewaModel->alamat = $data['alamat'];
        $SewaModel->save();
        return redirect()->route('form');

    }

    public function destroy($id)
    {
        $SewaModel = SewaModel::find($id);
        $SewaModel->delete();
        return redirect('/table');
    }
    public function store(Request $request)
    {
        tblpenyewa::create($request->except(['_token','submit']));
        return redirect('/form');
    }

    // public function edit($id){
    //     $SewaModel = SewaModel::find($id);
    //     dd($SewaModel);
    //     return view('')
    // }
}
