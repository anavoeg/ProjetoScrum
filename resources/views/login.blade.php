@extends('layouts.base')

@section('content')

<div class="container client-login d-flex justify-content-center">
    <div class="col-md-8 order-md-1 ">
        <!--<hr class="mb-4">-->
        <p class="page-text login-text">Digite seu email e senha para acessar uma nova experiência.</p>
        <hr class="mb-4">
            <form enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email ou CPF" required>
                    <div class="invalid-feedback">
                        Esse email ou cpf não se encontra em nosso banco.
                        </div>
                </div>
            
                <div class="mb-3">
                    <label for="senha">senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="">
                    <div class="invalid-feedback">
                        senha inválida.
                    </div>
                </div> 
                 <a class="" href="{{route('cadastro')}}"><span class="signup-warn">Ainda não possui uma conta? Mude isso agora.</span></a>
                <button class="btn btn-lg btn-block btn-cad" type="submit">ENTRAR</button>
            </form>
    </div>
</div>
@endsection