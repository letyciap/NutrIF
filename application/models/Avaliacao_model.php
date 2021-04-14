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

    function recuperarTodos(){
        $sql = "SELECT * from Avaliacao";
        return $this->db->query($sql)->result();
    }

    public function inserir() {
        $dados = array(
            'codavaliacao' => $this->codavaliacao,
            'matricula' => $this->matricula,
            'codtiporefeicao' => $this->codtiporefeicao,
            'datarefeicao' => $this->datarefeicao,
            'alimento' => $this->alimento,
            'bebida' => $this->bebida,
            'atendimento' => $this->atendimento,
            'comentario' => $this->comentario
        );

        return $this->db->insert('Avaliacao', $dados);
    }
}