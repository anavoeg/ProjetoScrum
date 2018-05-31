@extends('layouts.base')

@section('content')

<div class="container client-login d-flex justify-content-center">
    <div class="col-md-8 order-md-1 ">
        <!--<hr class="mb-4">-->
        <p class="page-text login-text">Digite seu email e senha para acessar uma nova experiência.</p>
        <hr class="mb-4">
        {{--Erros (validação)--}}
        @include('inc.errors')

            <form enctype="multipart/form-data" method="POST" action="/executar_login">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email ou CPF" required>
                    {{--<div class="invalid-feedback">--}}
                        {{--Esse email ou cpf não se encontra em nosso banco.--}}
                    {{--</div>--}}
                </div>
            
                <div class="mb-3">
                    <label for="senha">senha</label>
                    <input type="password" class="form-control" name="password" id="senha" placeholder="">
                    {{--<div class="invalid-feedback">--}}
                        {{--senha inválida.--}}
                    {{--</div>--}}
                </div> 
                 <a href="{{route('cadastro')}}"><span class="signup-warn">Ainda não possui uma conta? Mude isso agora.</span></a>
                <a href="{{route('recuperar')}}"><span class="signup-warn">Recuperar senha.</span></a>
                <button class="btn btn-lg btn-block btn-cad" type="submit">ENTRAR</button>
            </form>
    </div>
</div>
@endsection