@extends('template')

    @section('content')

        <h1>Nova Inscrição</h1>

        {!! Form::open(['method'=>'post']) !!}

        <div class="form-group" style="width: 500px;">
            {!! Form::label('nome_time','Nome do Clube:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 500px;">
            {!! Form::label('abreviatura','Abreviatura do Nome do time 3 digito:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 500px;">
            {!! Form::label('nome_responsavel','Responsavel:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group" style="width: 500px;">
            {!! Form::label('fone','Telefone:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group" style="width: 500px;">
            {!! Form::label('email','Email:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group" style="width: 500px;">
            {!! Form::label('nome_responsavel','Responsavel:') !!}
            {!! Form::text('', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::close() !!}

    @stop