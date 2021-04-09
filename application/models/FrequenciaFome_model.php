<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrequenciaFome_model extends CI_Model {
    public $codfrequenciafome;
    public $frequenciafome;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
		$sql = "SELECT * from FrequenciaFome";
		return $this->db->query($sql)->result();
	}
}