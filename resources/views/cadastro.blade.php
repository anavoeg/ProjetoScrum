@extends('layouts.base')

@section('content')

<div class="container client-form d-flex justify-content-center">
    <div class="col-md-8 order-md-1 ">
        <h4 class="mb-3">Faça parte do bloco <span class="page-cia">CARNAVALIA</span></h4>
        <p class="page-text">Roupas e sapatos com design e preço pensado para você:</p>
        @include('inc.errors')
        <form enctype="multipart/form-data" method="POST" action="/executar_cadastro" class="needs-validation" novalidate>
            {{csrf_field()}}
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="" name="first_name" required>
              {{--<div class="invalid-feedback">--}}
                {{--Escreva um nome válido.--}}
              {{--</div>--}}
            </div>
            <div class="col-md-6 mb-3">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" placeholder="" name="last_name" required>
              {{--<div class="invalid-feedback">--}}
                {{--Escreva um sobrenome válido.--}}
              {{--</div>--}}
            </div>
          </div>

          <div class="mb-3">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="" required>
              {{--<div class="invalid-feedback">--}}
                  {{--Escreva um cpf válido.--}}
              {{--</div>--}}
            </div>
            <div class="mb-3">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="address" placeholder="" required>
                {{--<div class="invalid-feedback">--}}
                    {{--Escreva um endereço válido.--}}
                {{--</div>--}}
              </div>
      
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="">
            {{--<div class="invalid-feedback">--}}
                {{--Escreva um email válido.--}}
            {{--</div>--}}
          </div>

          <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="" name="password" required>
          </div>

          <div class="mb-3">
            <label for="senha">Confirmar senha</label>
            <input type="password" class="form-control" id="senha" name="passwordc" placeholder="" required>
            {{--<div class="invalid-feedback">--}}
                {{--As senhas não coincidem. Por favor escreva uma senha válida.--}}
            {{--</div>--}}
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info" name="check_termos_condicoes">
            <label class="custom-control-label" for="save-info">Concordo com os termos</label>
          </div>
          <hr class="mb-4">
            <button class="btn btn-lg btn-block btn-cad" type="submit">Cadastrar</button>
          </form>
        </div>
    </div>
    <button class="btn btn-back" type="submit" onclick="history.go(-1)"><i class="fas fa-undo"></i> Voltar</button>

@endsection