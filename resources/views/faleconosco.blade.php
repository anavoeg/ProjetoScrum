@extends('layouts.base')

@section('content')
    <form class="form-horizontal" method="POST" action="{{route('sendMail')}}">
        {{ csrf_field() }}
        <fieldset>

            <!-- Form Name -->
            <legend>Contato</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome:</label>
                <div class="col-md-8">
                    <input id="name" name="name" type="text" placeholder="Seu nome..." class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">E-mail:</label>
                <div class="col-md-8">
                    <input id="email" name="email" type="text" placeholder="Seu e-mail..." class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="message">Mensagem:</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="" type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection