<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunaKarya extends Model
{
    use HasFactory;
    protected $table = 'tuna_karya';
    protected $guarded = ['id'];
    public $timestamps = false;
}
