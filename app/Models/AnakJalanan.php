<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakJalanan extends Model
{
    use HasFactory;
    protected $table = 'anak_jalanan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
