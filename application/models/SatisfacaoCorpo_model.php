<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SatisfacaoCorpo_model extends CI_Model {
    public $satisfacaocorpo;
    public $codsatisfacaocorpo;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
		$sql = "SELECT * from SatisfacaoCorpo";
		return $this->db->query($sql)->result();
	}

  
}