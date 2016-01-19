@extends('template')
    @section('content')
        <div class="container">
            <table align="center">
                <tr style=" height: 10px;">
                    <td class="th" style="border-right: 1px solid #DDDDDD"><b style="font-size: 20pt;">TABELA</b></td>
                    <td class="th"><b style="font-size: 20pt; margin-left: 20px;">JOGOS</b></td>
                </tr>
                <tr><td style="border-right: 1px solid #DDDDDD">&nbsp;</td><td></td></tr>
                <tr>
                    <td valign="top" width="720px" style="border-right: 1px solid #DDDDDD">
                        <div class="tabClass">
                            <table class="table nav-tabs" width="100%">
                                <tr class="tabtr">
                                    <th class="th">CLASSIFICAÇÃO</th>
                                    <th class="text-center col_lg th">P</th>
                                    <th class="text-center col_lg th">J</th>
                                    <th class="text-center col_lg th">V</th>
                                    <th class="text-center col_lg th">E</th>
                                    <th class="text-center col_lg th">D</th>
                                    <th class="text-center col_lg th">GP</th>
                                    <th class="text-center col_lg th">GC</th>
                                    <th class="text-center col_lg th">SG</th>
                                </tr>
                                @foreach($clubes as $clube)
                                    <tr class="tabtd" style="vertical-align: middle">

                                        <td style="vertical-align: middle" class="row_td">{{ $cont++ }}&nbsp;&nbsp;&nbsp;&nbsp;{{ $clube->time }}</td>
                                        <td style="vertical-align: middle" class="text-center td1"><b>{{ $clube->P }}</b></td>
                                        <td style="vertical-align: middle" class="text-center ">{{ $clube->J }}</td>
                                        <td style="vertical-align: middle" class="text-center td1">{{ $clube->V }}</td>
                                        <td style="vertical-align: middle" class="text-center ">{{ $clube->E }}</td>
                                        <td style="vertical-align: middle" class="text-center td1">{{ $clube->D }}</td>
                                        <td style="vertical-align: middle" class="text-center ">{{ $clube->GP }}</td>
                                        <td style="vertical-align: middle" class="text-center td1">{{ $clube->GC }}</td>
                                        <td style="vertical-align: middle" class="text-center ">{{ $clube->SG }}</td>
                                    </tr>
                                @endforeach

                                {{--<tr><td colspan="9"><img src="{{asset($clube->inscricao->escudo)}}" width="40px" height="40px"></td></tr>--}}

                            </table>
                        </div>
                    </td>
                    <td valign="top">
                        <div class="tabJogos">
                            <table class="table">
                                <tr><td style="text-align: center; font-size: 15px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">RODADA</td></tr>
                                <tr height="114px">
                                    <td>
                                        <div style="position: absolute; font-size: 12px; width: 95%; text-align: center; margin-top: 10px;">Dom 06/12/2015 Socity roriz 17:00</div>
                                        <div class="time1">
                                            <span class="placar_jogo_item1">CSK</span>
                                            <span class="placar_jogo_sigla1"><img src="{{asset('img/cska.png')}}" width="40px" height="40px"> </span>
                                        </div>
                                        <span style="margin-top: 44px;   float:left; margin-left:25px; font-size: 30px; position: relative;"><b>2</b></span>
                                        <div style="margin-top: 52px; width: 12px; margin-left: 155px; position: absolute;">
                                        <img src="{{asset('glyphicons/png/glyphicons-611-placar.png')}}" width="10px" height="10px">
                                        </div>
                                        <span style="margin-top: 44px;   float: left; margin-left: 27px; font-size: 30px; position: relative;"><b>3</b></span>
                                        <div class="time2">
                                            <span class="placar_jogo_sigla2"><img src="{{asset('img/cska.png')}}" width="40px" height="40px"></span>
                                            <span class="placar_jogo_item2">AGR</span>

                                        </div>
                                    </td>
                                </tr>
                                <tr height="115px">
                                    <td>
                                        <div style="position: absolute; font-size: 12px; width: 95%; text-align: center; margin-top: 10px;">Dom 06/12/2015 Socity roriz 17:00</div>
                                        <div class="time1">
                                            <span class="placar_jogo_item1">CSK</span>
                                            <span class="placar_jogo_sigla1"><img src="{{asset('img/cska.png')}}" width="40px" height="40px"> </span>
                                        </div>
                                        <span style="margin-top: 44px;   float:left; margin-left:25px; font-size: 30px; position: relative;"><b>2</b></span>
                                        <div style="margin-top: 52px; width: 12px; margin-left: 155px; position: absolute;">
                                            <img src="{{asset('glyphicons/png/glyphicons-611-placar.png')}}" width="10px" height="10px">
                                        </div>
                                        <span style="margin-top: 44px;   float: left; margin-left: 27px; font-size: 30px; position: relative;"><b>3</b></span>
                                        <div class="time2">
                                            <span class="placar_jogo_sigla2"><img src="{{asset('img/cska.png')}}" width="40px" height="40px"></span>
                                            <span class="placar_jogo_item2">AGR</span>

                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    @stop