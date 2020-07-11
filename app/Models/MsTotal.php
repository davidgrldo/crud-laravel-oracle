<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsTotal extends Model
{
    //Select table pada database
    protected $table = 'pendapatan_total';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    //Mengizinkan semua field diinput ke database
    protected $guarded = [];
    //Set timestamps = null
    public $timestamps = false;
    //Relasi Barang pada tabel Pendapatan per Armada
    public function barang()
    {
        return $this->belongsTo(MsBarang::class, 'kode_barang', 'kode_barang');
    }
}