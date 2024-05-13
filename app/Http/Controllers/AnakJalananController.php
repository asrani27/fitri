<?php

namespace App\Http\Controllers;

use App\Models\AnakJalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnakJalananController extends Controller
{
    public function index()
    {
        $data = AnakJalanan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.anakjalanan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.anakjalanan.create');
    }
    public function edit($id)
    {
        $data = AnakJalanan::find($id);
        return view('admin.anakjalanan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = AnakJalanan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama anakjalanan Sudah Ada');
            return back();
        } else {
            AnakJalanan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/anakjalanan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = AnakJalanan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/anakjalanan');
    }
    public function delete($id)
    {
        $data = AnakJalanan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/anakjalanan');
    }
}
