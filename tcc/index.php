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
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        </head>
        <body>

        <div>
            <nav id="menu" class="navbar navbar-expand-lg navbar bg">
                <a id="sige" class="navbar-brand" href="index.php">SIGE</a><br><h4 id="sub" class="sub">Sistema de Gestão Esportiva</h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a id="registro" class="nav-link" href="app/views/cadastro.php">Registre-se <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>

                <form action="app/controllers/usuario.php?acao=logar" method="post">
                    <input type="text" class="form-control" id="validationServer01" placeholder="Usuário" name="login">
                    <input type="password" class="form-control" id="validationServer02" placeholder="Senha" name="senha">
                <div id="botao1">
                    <input type="submit" name="entrar" class="btn btn-outline-dark" id="bot1" value="Entrar">
                </div>
                </form>

            </nav>
        </div>

            <div id="conteudos">
            <h1>aaaaaaaaaaaaaaaaaaaaaaa</h1>

            </div>



<?php include "app/views/rod.php"; ?>