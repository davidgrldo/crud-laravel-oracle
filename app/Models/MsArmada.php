<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsArmada extends Model
{
    protected $table = 'armada';
    protected $primaryKey = 'kode_armada';
    protected $guarded = [];

    public $timestamps = false;
    public function karyawan()
    {
        return $this->belongsTo(MsKaryawan::class, 'kode_karyawan', 'kode_karyawan');
    }
}