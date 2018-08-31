<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>SIGE - Sistema de Gestão Esportiva</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

</head>

<body>
<nav id="menu" class="navbar navbar-expand-lg navbar bg">
    <a id="sige" class="navbar-brand" href="../../index.php">SIGE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a id="registro" class="nav-link" href="cadastro.php">Registre-se <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<h1>Cadastro</h1>

<div class="cadastro" id="cadastro">
    <div class="conteudoCad">
    <form action="../controllers/usuario.php?acao=cadastrar" method="post">
        <div>

            <div class="col-md-4 mb-3" style="color: #8e0000">
                <label for="validationServer01">Nome</label>
                <input type="text" class="form-control" id="validationServer01" name="nome" placeholder="Primeiro Nome" required style="width: 205px; height: 40px;">
            </div>

            <div class="col-md-4 mb-3" style="color: #8e0000">
                <label for="validationServer02">Sobrenome</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Último nome" required style="width: 205px; height: 40px;">
            </div>

            <div class="col-md-3 mb-3" style="color: #8e0000">
                <label for="validationServer05">CPF</label>
                <input type="number" class="form-control" id="validationServer05" name="cpf" placeholder="CPF" required style="width: 205px; height: 40px;">
            </div>

            <div class="col-md-6 mb-3" style="color: #8e0000">
                <label for="validationServer03">Data de Nascimento</label>
                <input type="date" class="form-control" id="validationServer03" name="data" placeholder="date" required style="width: 205px; height: 40px;">
            </div>

            <div class="col-md-3 mb-3" style="color: #8e0000">
                <label for="validationServer04">Ocupação</label>
                <input type="text" class="form-control" id="validationServer04" name="ocupacao" placeholder="Aluno/Servidor" required style="width: 205px; height: 40px;">
            </div>

            <div class="col-md-3 mb-3" style="color: #8e0000">
                <label for="validationServer04">Sexo</label>
                <input type="radio" name="gender" value="masc">Masculino<br>
                <input type="radio" name="gender" value="fem">Feminino<br>
            </div>

            <div class="col-md-3 mb-3" style="color: #8e0000">
                <label for="validationServer05">Usuário</label>
                <input type="text" class="form-control" id="validationServer05" name="usuario" placeholder="User" required style="width: 205px; height: 40px;">
            </div>

            <div class="form-group" style="color: #8e0000; padding-left: 12px">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="*********" style="width: 205px; height: 40px;">
            </div>
        </div><br>
        <div id="botao2">
            <input type="submit" name="enviar" class="btn btn-primary" id="bot2" value="Enviar">
        </div>
    </form>
    </div>
</div>

<?php include "rod.php"; ?>