<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus_model extends CI_Model {
    public $codcampus;
    public $campus;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from Campus";
        return $this->db->query($sql)->result();
    }

    public function inserir() {
        $dados = array(
            'codcampus' => $this->codcampus,
            'campus' => $this->campus
        );

        return $this->db->insert('Campus', $dados);
    }

    public function atualizar() {

        $dados = array(
            'codcampus' => $this->codcampus,
            'campus' => $this->campus
        );

        return $this->db->replace('Campus', $dados);

        // $sql = "UPDATE Campus SET campus = '".$campus."' WHERE codcampus = ".$codcampus;
        // $dados = array($sql, $dados);
        // return $this->db->query($sql, $dados);
    }

    public function excluir($codcampus) {
        $sql = "DELETE FROM Campus WHERE codcampus = ".$codcampus;
        $dados = array($sql, $dados);
        return $this->db->query($sql, $dados);
    }


}