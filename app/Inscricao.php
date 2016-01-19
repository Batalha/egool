<?php

namespace Egool;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $fillable = [

        'nome_time',
        'abreviatura',
        'nome_responsavel',
        'fone',
        'email',
        'escudo',

    ];

    public function posicao(){

        return $this->hasMany('Egool\Posicao');

    }

}
