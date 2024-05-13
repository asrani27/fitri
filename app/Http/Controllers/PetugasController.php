<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::orderBy('id', 'DESC')->paginate(15);
        return view('admin.petugas.index', compact('data'));
    }

    public function create()
    {
        return view('admin.petugas.create');
    }
    public function edit($id)
    {
        $data = Petugas::find($id);
        return view('admin.petugas.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Petugas::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama petugas Sudah Ada');
            return back();
        } else {
            petugas::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/petugas');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Petugas::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/petugas');
    }
    public function delete($id)
    {
        $data = Petugas::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/petugas');
    }
}
