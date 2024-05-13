<?php

namespace App\Http\Controllers;

use App\Models\Razia;
use App\Models\Jaminan;
use App\Models\TunaKarya;
use App\Models\AnakJalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JaminanController extends Controller
{
    public function index()
    {
        $data = Jaminan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.jaminan.index', compact('data'));
    }

    public function create()
    {
        $razia = Razia::get();
        $anakjalanan = AnakJalanan::get();
        $tunakarya = TunaKarya::get();
        return view('admin.jaminan.create', compact('razia', 'anakjalanan', 'tunakarya'));
    }
    public function edit($id)
    {
        $data = Jaminan::find($id);
        $razia = Razia::get();
        $anakjalanan = AnakJalanan::get();
        $tunakarya = TunaKarya::get();
        return view('admin.jaminan.edit', compact('data', 'razia', 'anakjalanan', 'tunakarya'));
    }
    public function store(Request $req)
    {
        Jaminan::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jaminan');
    }
    public function update(Request $req, $id)
    {
        $data = Jaminan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jaminan');
    }
    public function delete($id)
    {
        $data = Jaminan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jaminan');
    }
}
