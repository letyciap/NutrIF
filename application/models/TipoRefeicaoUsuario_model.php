<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicaoUsuario_model extends CI_Model {
    public $codtiporefeicao;
    public $matricula;

    public function __construct() {
        parent::__construct();
    }
}