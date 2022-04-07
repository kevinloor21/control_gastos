<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    //
    public $timestamps=false;
    protected $table='movimientos';
    protected $primaryKey='mov_id';
    protected $fillable = [
        'tip_id',
        'mov_fecha',
        'mov_tipo',
        'mov_cantidad',
        'mov_detalle',
        'usu_id'
    ];
}
