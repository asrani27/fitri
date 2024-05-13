<?php

namespace App\Http\Controllers;

use App\Models\AnakJalanan;
use App\Models\User;
use App\Models\Bibit;
use App\Models\Bobot;
use App\Models\Deposito;
use App\Models\Jaminan;
use App\Models\Kriteria;
use App\Models\Nasabah;
use App\Models\Pegawai;
use App\Models\Pencairan;
use App\Models\Pengajuan;
use App\Models\Perhitungan;
use App\Models\Petugas;
use App\Models\Razia;
use App\Models\Sertifikat;
use App\Models\Setoran;
use App\Models\Siswa;
use App\Models\Standart;
use App\Models\SubKriteria;
use App\Models\TunaKarya;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function jenis()
    {
        $jenis = request()->get('jenis');
        if ($jenis == 'tunakarya') {
            $data = TunaKarya::get();
            return view('admin.laporan.tunakarya', compact('data'));
        }
        if ($jenis == 'anakjalanan') {
            $data = AnakJalanan::get();
            return view('admin.laporan.anakjalanan', compact('data'));
        }
        if ($jenis == 'petugas') {
            $data = Petugas::get();
            return view('admin.laporan.petugas', compact('data'));
        }
        if ($jenis == 'razia') {
            $data = Razia::get();
            return view('admin.laporan.razia', compact('data'));
        }
        if ($jenis == 'jaminan') {
            $data = Jaminan::get();
            return view('admin.laporan.jaminan', compact('data'));
        }
    }
}
