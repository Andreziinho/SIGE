<?php
require_once '../models/DBConnection.php';
require_once '../models/CrudUser.php';
require_once '../models/CrudMaterial.php';

$acao = $_GET['acao'];
$crud = new CrudUser();
$materiaisCrud = new CrudMaterial();

switch ($acao){
    case 'cadastrar':
        if (isset($_POST['enviar'])){
            $user = new Usuario($_POST['cpf'],$_POST['nome'],$_POST['data'],$_POST['ocupacao'],$_POST['sexo'],$_POST['usuario'],$_POST['senha']);
            $crud->insertUser($user);
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso.');window.location.href='../../index.php';               </script>";
            include '../../index.php';
        }else{
                echo "Algo deu errado. Tente novamente.";
        }break;

    case 'logar':
        if (isset($_POST['entrar'])){
            $resultado = $crud->acharUser($_POST['login'],$_POST['senha']);
            if ($resultado != null){
                if ($resultado == 0) {
                    include '../views/pageAdmin.php';
                }elseif($resultado == 1){
                    $materiais = $materiaisCrud->getMateriais();
                    include '../views/pageUser.php';
                }
            }else{
                echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../../index.php';               </script>";
                die();
            }
        }break;

}

