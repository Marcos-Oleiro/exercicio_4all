<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    public $id;
    public $nome;
    public $cidade;
    public $uf;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cep;
    public $lat;

    public $lng;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'uf',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'lat',
        'lng'
    ];

}

