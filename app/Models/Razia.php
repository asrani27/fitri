<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razia extends Model
{
    use HasFactory;
    protected $table = 'razia';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }
    public function anakjalanan()
    {
        return $this->belongsTo(AnakJalanan::class, 'anakjalanan_id');
    }
    public function tunakarya()
    {
        return $this->belongsTo(TunaKarya::class, 'tunakarya_id');
    }
}
