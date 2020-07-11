<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsArea extends Model
{
    protected $table = 'area';
    protected $primaryKey = 'kode_area';
    protected $guarded = [];

    public $timestamps = false;
    public function armada()
    {
        return $this->belongsTo(MsArmada::class, 'kode_armada', 'kode_armada');
    }
}