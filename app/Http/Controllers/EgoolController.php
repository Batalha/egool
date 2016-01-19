<?php

namespace Egool\Http\Controllers;

use Illuminate\Http\Request;

use Egool\Http\Requests;
use Egool\Http\Controllers\Controller;

class EgoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $times =[
            'cska',
            'escrotos',
        ];

        return view('egool.index')
            ->with(compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

}
