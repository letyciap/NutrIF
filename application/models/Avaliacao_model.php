<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacao_model extends CI_Model {
    public $codavaliacao;
    public $matricula;
    public $codtiporefeicao;
    public $datarefeicao;
    public $alimento;
    public $bebida;
    public $atendimento;
    public $comentario;

    public function __construct() {
        parent::__construct();
    }
}