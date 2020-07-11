<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsKaryawan extends Model
{
    public $timestamps = false;
    protected $table = 'karyawan';
    protected $primaryKey = 'kode_karyawan';
    protected $guarded = [];
}