<?php

namespace App\Http\Controllers;

use App\Models\Razia;
use App\Models\Petugas;
use App\Models\TunaKarya;
use App\Models\AnakJalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RaziaController extends Controller
{
    public function index()
    {
        $data = Razia::orderBy('id', 'DESC')->paginate(15);
        return view('admin.razia.index', compact('data'));
    }

    public function create()
    {
        $petugas = Petugas::get();
        $anakjalanan = AnakJalanan::get();
        $tunakarya = TunaKarya::get();
        return view('admin.razia.create', compact('petugas', 'anakjalanan', 'tunakarya'));
    }
    public function edit($id)
    {
        $data = Razia::find($id);
        $petugas = Petugas::get();
        $anakjalanan = AnakJalanan::get();
        $tunakarya = TunaKarya::get();
        return view('admin.razia.edit', compact('data', 'petugas', 'anakjalanan', 'tunakarya'));
    }
    public function store(Request $req)
    {
        $check = Razia::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama razia Sudah Ada');
            return back();
        } else {
            Razia::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/razia');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Razia::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/razia');
    }
    public function delete($id)
    {
        $data = Razia::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/razia');
    }
}
