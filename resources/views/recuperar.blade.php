<?php
/**
 * Created by PhpStorm.
 * User: HardSorft
 * Date: 29/05/2018
 * Time: 03:54
 */?>
@extends('layouts.base')

@section('content')

    <div class="container client-form d-flex justify-content-center">
        <div class="col-md-8 order-md-1 ">
            <h4 class="mb-3">Faça parte do bloco <span class="page-cia">CARNAVALIA</span></h4>
            <p class="page-text">Roupas e sapatos com design e preço pensado para você:</p>
            @include('inc.errors')
            <form enctype="multipart/form-data" method="POST" action="/executar_recuperar" class="needs-validation" novalidate>
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                            {{--<div class="invalid-feedback">--}}
                            {{--Escreva um email válido.--}}
                            {{--</div>--}}

                        </div>

                    </div>
                    <div class="col-md-7">
                        <button class="btn btn-md btn-block btn-cad" type="submit">Recuperar Senha</button>
                        <hr class="mb-4">
                    </div>

                </div>
            </form>
        </div>
    </div>
    <button class="btn btn-back" type="submit" onclick="history.go(-1)"><i class="fas fa-undo"></i> Voltar</button>

@endsection