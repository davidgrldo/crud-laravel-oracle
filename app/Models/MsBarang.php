<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsBarang extends Model
{
    public $timestamps = false;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $guarded = [];
}