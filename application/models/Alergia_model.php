<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alergia_model extends CI_Model {
    public $codalergia;
    public $alergia;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from Alergia";
        return $this->db->query($sql)->result();
    }

    public function inserir() {
        $dados = array(
            'codalergia' => $this->codalergia,
            'alergia' => $this->alergia
        );

        return $this->db->insert('Alergia', $dados);
    }

    public function atualizar($codalergia, $alergia) {
        $sql = "UPDATE Alergia SET alergia = '".$alergia."' WHERE codalergia = ".$codalergia;
        $dados = array($sql, $dados);
        return $this->db->query($sql, $dados);
    }

    public function excluir($codalergia) {
        $sql = "DELETE FROM Alergia WHERE codalergia = ".$codalergia;
        $dados = array($sql, $dados);
        return $this->db->query($sql, $dados);
    }
}