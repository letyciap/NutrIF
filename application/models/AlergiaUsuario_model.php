<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlergiaUsuario_model extends CI_Model {
    public $matricula;
    public $codalergia;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from AlergiaUsuario";
        return $this->db->query($sql)->result();
    }
}