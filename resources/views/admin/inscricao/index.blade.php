@extends('template')

    @section('content')

        <h1>Inscricao</h1>
        <table class="table nav-tabs">
            <tr>
                <th>Clube</th>
                <th>Abreviatura</th>
                <th>Responsavel</th>
                <th>Fone</th>
                <th>Email</th>
                <th>Data</th>
            </tr>

            @foreach($insc as $inscricao)
                <tr>
                    <td>{{ $inscricao->nome_time }}</td>
                    <td>{{ $inscricao->abreviatura }}</td>
                    <td>{{ $inscricao->nome_responsavel }}</td>
                    <td>{{ $inscricao->fone }}</td>
                    <td>{{ $inscricao->email }}</td>
                    <td>{{ $inscricao->created_at }}</td>
                </tr>
            @endforeach

        </table>

    @stop