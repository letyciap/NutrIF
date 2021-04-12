<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicaoUsuario_model extends CI_Model {
    public $codtiporefeicao;
    public $matricula;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from TipoRefeicaoUsuario";
        return $this->db->query($sql)->result();
    }
}