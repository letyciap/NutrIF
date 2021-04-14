<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicao_model extends CI_Model {
    public $codtiporefeicao;
    public $tiporefeicao;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from TipoRefeicao";
        return $this->db->query($sql)->result();
    }

    function recuperarTodosMenosNDA(){
        $sql = "SELECT * FROM TipoRefeicao WHERE codtiporefeicao NOT IN ('6')";
        return $this->db->query($sql)->result();
    }
}