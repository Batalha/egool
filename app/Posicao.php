<?php

namespace Egool;

use Illuminate\Database\Eloquent\Model;

class Posicao extends Model
{
    protected $fillable = [
        'inscricaos_id',
        'times',
        'P',
        'V',
        'E',
        'D',
        'GP',
        'GC',
        'SG',
    ];

    public function inscricao(){
       return $this->belongsTo('Egool\Inscricao');
    }
}
