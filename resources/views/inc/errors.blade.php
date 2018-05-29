<?php
/**
 * Created by PhpStorm.
 * User: HardSorft
 * Date: 29/05/2018
 * Time: 02:54
 */?>
{{--Apresentação dos erros de validaçao--}}
@if(count($errors) > 0)
    <div class="alert alert-info">

        {{--Verificar qual vai ser o titulo da caixa de erro--}}
        @if(count($errors) == 1)
            <p class="titulo-erro">ERRO:</p>
        @else
            <p class="titulo-erro">ERROS:</p>
        @endif

        {{--Apresentar os erros--}}
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    </div>
@endif

{{--Apresentação dos erros de comunicação com a BD(quando usuario passa pela validação mas o usuario ja existe ou dados incorretos)--}}
@if(isset($erros_bd))
    <div class="alert alert-info">
        @foreach($erros_bd as $erro)
            <p>{{ $erro }}</p>
        @endforeach
    </div>
@endif
