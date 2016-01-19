<?php

namespace Egool\Http\Controllers;

use Egool\Inscricao;
use Illuminate\Http\Request;

use Egool\Http\Requests;
use Egool\Http\Controllers\Controller;

class InscricaoAdminController extends Controller
{

    /**
     * @var Inscricao
     */
    private $inscricao;

    public function __construct(Inscricao $inscricao)
    {
        $this->inscricao = $inscricao;
    }

    public function index()
    {

        $insc = $this->inscricao->all();

        return view('Admin.inscricao.index')
            ->with(compact('insc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inscricao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
