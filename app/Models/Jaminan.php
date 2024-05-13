<?php

namespace App\Models;

use App\Models\Razia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jaminan extends Model
{
    use HasFactory;
    protected $table = 'jaminan';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function anakjalanan()
    {
        return $this->belongsTo(AnakJalanan::class, 'anak_jalanan_id');
    }
    public function tunakarya()
    {
        return $this->belongsTo(TunaKarya::class, 'tuna_karya_id');
    }
    public function razia()
    {
        return $this->belongsTo(Razia::class, 'razia_id');
    }
}
