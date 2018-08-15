<?php
require 'Material.php';

class CrudMaterial
{
    private $conexao;

    public function getMateriais(){
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo";

        $resultado = $this->conexao->query($sql);
        $material = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $materiais = [];

        foreach ($material as $mat) {
            $materiais[] = new Material($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['historico'], $mat['qtd']);
        }
        return $materiais;

    }

    public function getMaterial($idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo WHERE idnum = $idnum";

        $resultado = $this->conexao->query($sql);
        $mat = $resultado->fetch(PDO::FETCH_ASSOC);

        $materiais[] = new Material($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['historico'], $mat['qtd']);

        return $mat;
    }

    public function insertMaterial(Material $mat){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into emprestimo(nome,descricao,especificao,historico,qtd) values ('{$mat->getNome()}','{$mat->getDescricao()}','{$mat->getEspecificacao()}','{$mat->getHistorico()}','{$mat->getQtd()}')";

        try {
            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function atualizaMaterial($mat, $idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $mat->geIdnum();
        $dados[] = $mat->getNome();
        $dados[] = $mat->getDescricao();
        $dados[] = $mat->getEspecificacao();
        $dados[] = $mat->getHistorico();
        $dados[] = $mat->getQtd();
        $sql = "UPDATE emprestimo SET nome = " . $dados[0] . ", descricao = '" . $dados[1] . "', especificacao = '" . $dados[2] . "', historico = '" . $dados[3] . "',qtd = '" . $dados[4]. "' WHERE idnum = $idnum";
        $this->conexao->exec($sql);
    }

    public function deletaMaterial($idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from emprestimo WHERE idnum = $idnum";
        $this->conexao->exec($sql);

    }
}