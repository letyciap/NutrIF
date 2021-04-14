<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlergiaUsuario_model extends CI_Model {
    public $codalergia;
    public $matricula;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from AlergiaUsuario";
        return $this->db->query($sql)->result();
    }

    public function inserir() {
        $dados = array(
            'codalergia' => $this->codalergia,
            'matricula' => $this->matricula
        );

        return $this->db->insert('AlergiaUsuario', $dados);
    }

    public function atualizar($codalergia, $matricula) {
        $sql = "UPDATE AlergiaUsuario SET matricula = '".$matricula."' WHERE codalergia = ".$codalergia;
        $dados = array($sql, $dados);
        return $this->db->query($sql, $dados);
    }

    public function excluir($codalergia) {
        $sql = "DELETE FROM AlergiaUsuario WHERE codalergia = ".$codalergia;
        $dados = array($sql, $dados);
        return $this->db->query($sql, $dados);
    }
}