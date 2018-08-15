<?php

require_once "../models/DBConnection.php";
require_once "../models/Material.php";
require_once "../models/CrudMaterial.php";

$acao = $_GET['acao'];
$materiaisCrud = new CrudMaterial();

switch ($acao){
    case 'inserir':
        if (isset($_POST['cadastrar'])){
            $material = new Material($_POST['nome'],$_POST['descricao'],$_POST['especificacao'],$_POST['historico'],$_POST['qtd']);
            $materiaisCrud->insertMaterial($material);
            include '../views/pageAdmin.php';
        }else{
            echo "Erro ao inserir material.";
        }break;

    case 'editar':
        if (isset($_POST['alterar'])){
            $material = new Material($_POST['nome'],$_POST['descricao'],$_POST['especificacao'],$_POST['historico'],$_POST['qtd']);
            $materiaisCrud->atualizaMaterial($material);
            include '../views/pageAdmin.php';
        }else{
            echo "Erro ao editar material.";
        }break;

    case 'excluir':
        if (isset($_POST['remover'])){
            $material = new Material($_POST['nome'],$_POST['descricao'],$_POST['especificacao'],$_POST['historico'],$_POST['qtd']);
            $materiaisCrud->deletaMaterial($material);
            include '../views/pageAdmin.php';
        }else{
            echo "Erro ao remover material.";
        }break;
}
