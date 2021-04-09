<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero_model extends CI_Model {
    public $codgenero;
    public $genero;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from Genero";
        return $this->db->query($sql)->result();
    }
}