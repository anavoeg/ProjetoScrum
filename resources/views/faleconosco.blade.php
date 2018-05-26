@include('layouts.base')

@section('content')


    <form method="POST" enctype="multipart/form-data">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required/><br><br>
        
        <label for="email">CPF: </label>
        <input type="cpf" name="cpf" id="cpf" required/><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required/><br><br>
        
        <label for="pass">Senha: </label>
        <input type="password" name="pass" id="pass" required/><br><br>

        <label for="confirmpass">Confirmar senha: </label>
        <input type="password" name="confirmpass" id="pass" required/><br><br>

        <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" />
    </form>

@endsection