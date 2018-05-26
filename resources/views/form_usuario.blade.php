@extends('layouts.header')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/usuariocad.css">
    <title>USUÁRIO PÚLBLICO</title>
</head>
<body>

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
</body>
</html>

@endsection