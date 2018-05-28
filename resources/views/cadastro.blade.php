@extends('layouts.base')

@section('content')

<div class="container client-form d-flex justify-content-center">
    <div class="col-md-8 order-md-1 ">
        <h4 class="mb-3">Faça parte do bloco <span class="page-cia">CARNAVALIA</span></h4>
        <p class="page-text">Roupas e sapatos com design e preço pensado para você:</p>
        <form enctype="multipart/form-data" class="needs-validation" novalidate>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="" value="" required>
              <div class="invalid-feedback">
                Escreva um nome válido.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
              <div class="invalid-feedback">
                Escreva um sobrenome válido.
              </div>
            </div>
          </div>

          <div class="mb-3">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" placeholder="" required>
              <div class="invalid-feedback">
                  Escreva um cpf válido.
              </div>
            </div>
            <div class="mb-3">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="" required>
                <div class="invalid-feedback">
                    Escreva um endereço válido.
                </div>
              </div>
      
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="">
            <div class="invalid-feedback">
                Escreva um email válido.
            </div>
          </div>

          <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="" required>
          </div>

          <div class="mb-3">
            <label for="senha">Confirmar senha</label>
            <input type="password" class="form-control" id="senha" placeholder="" required>
            <div class="invalid-feedback">
                As senhas não coincidem. Por favor escreva uma senha válida.
            </div>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Lembre-se de mim</label>
          </div>
          <hr class="mb-4">
            <button class="btn btn-lg btn-block btn-cad" type="submit">Cadastrar</button>
          </form>
        </div>
    </div>
    <a href="/login"><button class="btn btn-back" type="submit"><i class="fas fa-undo"></i> Voltar</button></a>

@endsection