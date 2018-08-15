<?php

    include "cab.php";
    require_once "../models/CrudMaterial.php";
    $crud = new CrudMaterial();

    $materiais = $crud->getMateriais();


?>

<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

</head>
<body>
<h1>
    <?php foreach ($materiais as $material):?>
        <?php echo 'Nome: '.$material->getNome()." "?>
        <?php echo 'Descricao: '.$material->getDescricao()." "?>
        <?php echo 'Especificacoes: '.$material->getEspecificacao()." "?>
        <?php echo 'Historico: '.$material->getHistorico()." "?>
        <?php echo 'Quantidade: '.$material->getQtd()." "?>
    <?php endforeach;?>
</h1>

<?php include "rod.php"; ?>