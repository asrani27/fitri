<?php

namespace App\Http\Controllers;

use App\Models\TunaKarya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TunaKaryaController extends Controller
{
    public function index()
    {
        $data = TunaKarya::orderBy('id', 'DESC')->paginate(15);
        return view('admin.tunakarya.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tunakarya.create');
    }
    public function edit($id)
    {
        $data = TunaKarya::find($id);
        return view('admin.tunakarya.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = TunaKarya::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama tunakarya Sudah Ada');
            return back();
        } else {
            TunaKarya::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/tunakarya');
        }
    }
    public function update(Request $req, $id)
    {
        $data = TunaKarya::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/tunakarya');
    }
    public function delete($id)
    {
        $data = TunaKarya::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/tunakarya');
    }
}
