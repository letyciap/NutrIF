<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dieta_model extends CI_Model {
    public $coddieta;
    public $dieta;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
		$sql = "SELECT * from Dieta";
		return $this->db->query($sql)->result();
	}
}