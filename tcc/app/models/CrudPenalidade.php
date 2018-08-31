<?php
require 'Penalidade.php';

class CrudPenalidade
{
    private $conexao;

    public function getPenalidades(){
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from penalidade";

        $resultado = $this->conexao->query($sql);
        $penalidade = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $penalidades = [];

        foreach ($penalidade as $pen) {
            $penalidades[] = new Penalidade($pen['idpenalidade'], $pen['desc_pen']);
        }
        return $penalidades;

    }

    public function getPenalidade($idpen)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from penalidade WHERE idpenalidade = $idpen";

        $resultado = $this->conexao->query($sql);
        $pen = $resultado->fetch(PDO::FETCH_ASSOC);

        $penalidades[] = new Penalidade($pen['idpenalidade'], $pen['desc_pen']);

        return $pen;
    }

    public function insertPenalidade(Penalidade $pen){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into penalidade(idpenalidade, desc_pen) values ('{$pen->getIdpenalidade()}','{$pen->getDescPen()}')";

        try {
            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function atualizaPenalidade(Penalidade $pen, $idpen)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $pen->getIdpenalidade();
        $sql = "UPDATE penalidade SET descricao = '" . $dados[0] . "' WHERE idpenalidade = $idpen";
        $this->conexao->exec($sql);
    }

    public function deletaPenalidade($idpen)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from penalidade WHERE idpenalidade = $idpen";
        $this->conexao->exec($sql);

    }
}