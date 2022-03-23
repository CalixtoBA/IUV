<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'IdSucursal';
    /**public function SucOM()
    {
      return $this->belongsTo(TipoTienda::class);
    }*/
}
