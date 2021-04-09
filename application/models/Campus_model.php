<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus_model extends CI_Model {
    public $codcampus;
    public $campus;

    public function __construct() {
        parent::__construct();
    }
}