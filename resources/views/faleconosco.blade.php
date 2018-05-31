@extends('layouts.base')

@section('content')

<div class="container client-form d-flex justify-content-center">
    <div class="col-md-9 order-md-1 ">
        <p class="page-text"><span class="page-cia">A CARNAVALIA</span> quer ouvir você, mande seu elogio, crítica ou sugestão!</p>
        {{-- @include('inc.errors') --}}
        <form enctype="multipart/form-data" method="POST" action="/executar_cadastro" class="needs-validation" novalidate>
            {{csrf_field()}}
            <div class="col-md-6 mb-3">
              <label for="nome">Nome</label>
              <input type="text" class="form-control comment" id="nome" placeholder="" name="first_name" required>
              {{--<div class="invalid-feedback">--}}
                {{--Escreva um nome válido.--}}
              {{--</div>--}}
            </div>
      
          <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control comment" id="email" name="email" placeholder="">
            {{--<div class="invalid-feedback">--}}
                {{--Escreva um email válido.--}}
            {{--</div>--}}
          </div>

          <div class="col-md-8 mb-3">
            <div class="form-group">
              <label for="comment">Seu comentário:</label>
              <textarea class="form-control comment" rows="5" id="comment"></textarea>
            </div>
          </div>

          <hr class="mb-4">
            <button class="btn btn-lg btn-block btn-cad" type="submit">Enviar</button>
          </form>
        </div>
    </div>
    <button class="btn btn-back" type="submit" onclick="history.go(-1)"><i class="fas fa-undo"></i> Voltar</button>
@endsection