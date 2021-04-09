<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FreqConsumoCampus_model extends CI_Model {
    public $codfreqconsumocampus;
    public $freqconsumocampus;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from FreqConsumoCampus";
        return $this->db->query($sql)->result();
    }
}