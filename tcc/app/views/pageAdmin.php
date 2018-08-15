<?php include "cab.php";  ?>

<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

</head>
<body>
<div>
    <p>Adicionar Material</p>
    <form action="../controllers/admin.php?acao=inserir" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="descricao" placeholder="Descricao">
        <input type="text" name="qtd" placeholder="Quantidade">
        <input type="text" name="especificacao" placeholder="Especificacao">
        <input type="text" name="historico" placeholder="Historico">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</div>

<?php include "rod.php"; ?>