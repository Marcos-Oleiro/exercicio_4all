<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    //

    public $id;
    public $id_evento;
    public $numero_ingresso;
    public $vendido;
    public $versao;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_evento',
        'numero_ingresso',
        'vendido',
        'versao'
    ];

}
