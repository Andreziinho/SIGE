<?php

require_once "DBConnection.php";

class Penalidade
{
    private $idpenalidade;
    private $desc_pen;

    public function __construct($idpenalidade = null, $desc_pen = null){
        $this->idpenalidade = $idpenalidade;
        $this->desc_pen = $desc_pen;
    }

    public function getIdpenalidade(){return $this->idpenalidade;}
    public function setIdpenalidade($idpenalidade){$this->idpenalidade = $idpenalidade;}

    public function getDescPen(){return $this->desc_pen;}
    public function setDescPen($desc_pen){$this->desc_pen = $desc_pen;}




}