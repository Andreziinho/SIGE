        <?php include "app/views/cab.php";  ?>

        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        </head>
        <body>
        <nav id="menu" class="navbar navbar-expand-lg navbar bg">
            <a id="sige" class="navbar-brand" href="index.php">SIGE</a>
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
        </nav>

        <div id="abas">
                <ul>
                    <li id="aba1" class="selecionado">Login</li>
                </ul>
            </div>


            <div id="conteudos">

                <div class="conteudoaba1">
                    <div>
                        <form action="app/controllers/usuario.php?acao=logar" method="post">
                            <div class="col-md-4 mb-3" style="color: #8e0000; width: 200px;">
                                <label for="validationServer01">Usuário</label>
                                <input type="text" class="form-control" id="validationServer01" name="login" placeholder="Usuario" required style="width: 205px; height: 40px;">
                                <label for="validationServer01">Senha</label>
                                <input type="password" class="form-control" id="validationServer01" name="senha" placeholder="******" required style="width: 205px; height: 40px;">
                            </div>
                            <div id="botao1">
                                <input type="submit" name="entrar" class="btn btn-outline-dark" id="bot1" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>

            </div>



<?php include "app/views/rod.php"; ?>