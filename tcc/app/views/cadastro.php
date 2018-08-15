<?php include "cab.php";  ?>

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