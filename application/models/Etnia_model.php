<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etnia_model extends CI_Model {
    public $codeetnia;
    public $etnia;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from Etnia";
        return $this->db->query($sql)->result();
    }

    function recuperarTodos(){
        $sql = "SELECT * from Etnia";
        return $this->db->query($sql)->result();
    }
}