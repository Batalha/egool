<?php

namespace Egool\Http\Controllers;

use Egool\Posicao;
use Illuminate\Http\Request;

use Egool\Http\Requests;
use Egool\Http\Controllers\Controller;

class PosicaoController extends Controller
{
    /**
     * @var Posicao
     */
    private $posicao;

    public function __construct(Posicao $posicao)
    {

        $this->posicao = $posicao;
    }

    public function index()
    {

        $clube = $this->posicao->all()->sortByDesc('P');

        $view = view('posicao.index')
            ->with('clubes', $clube)
            ->with('cont', $cont = 1);

        return $view;
    }

}
