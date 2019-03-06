<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    public $local_id;
    public $local_nome;
    public $local_cidade;
    public $local_uf;
    public $local_endereco;
    public $local_numero;
    public $local_complemento;
    public $local_bairro;
    public $local_cep;
    public $local_lat;

    public $local_lng;
}
