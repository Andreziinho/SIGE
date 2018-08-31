<?php
require 'Produto.php';

class CrudQuadra
{
    private $conexao;

    public function getQuadras(){
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo";

        $resultado = $this->conexao->query($sql);
        $material = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $materiais = [];

        foreach ($material as $mat) {
            $materiais[] = new Produto($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['qtd']);
        }
        return $materiais;

    }

    public function getQuadra($idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo WHERE idnum = $idnum";

        $resultado = $this->conexao->query($sql);
        $mat = $resultado->fetch(PDO::FETCH_ASSOC);

        $materiais[] = new Produto($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['qtd']);

        return $mat;
    }

    public function insertQuadra(Produto $mat){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into emprestimo(nome,descricao,especificao,qtd) values ('{$mat->getNome()}','{$mat->getDescricao()}','{$mat->getEspecificacao()}','{$mat->getQtd()}')";

        try {
            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function atualizaQuadra(Produto $mat, $idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $mat->getNome();
        $dados[] = $mat->getDescricao();
        $dados[] = $mat->getEspecificacao();
        $dados[] = $mat->getQtd();
        $sql = "UPDATE emprestimo SET nome = " . $dados[0] . ", descricao = '" . $dados[1] . "', especificacao = '" . $dados[2] . "',qtd = '" . $dados[3]. "' WHERE idnum = $idnum";
        $this->conexao->exec($sql);
    }

    public function deletaQuadra($idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from emprestimo WHERE idnum = $idnum";
        $this->conexao->exec($sql);

    }
}