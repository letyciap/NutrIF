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

    public function atualizar() {
        $dados = array(
            'codavaliacao' => $this->codavaliacao,
            'matricula' => $this->matricula,
            'codtiporefeicao' => $this->codtiporefeicao,
            'datarefeicao' => $this->datarefeicao,
            'bebida' => $this->bebida,
            'atendimento' => $this->atendimento,
            'comentario' => $this->comentario,
            
        );
        return $this->db->replace('Avaliacao', $dados);
    }

    // grafico de barras/estatisticas
    // public function media($dia){

    //     $this->db->select('alimento');
    //     $this->db->where('datarefeicao', $dia);
    //     $query = $this->db->get('Avaliacao');
    //     $nAvaliacoes = $query->num_rows(); //Isso ele puxa do banco

    //     $this->db->select_sum('alimento');
    //     $this->db->from('Avaliacao');
    //     $this->db->where('datarefeicao', $dia);
    //     $alimento = $this->db->get();

    //     $this->db->select_sum('bebida');
    //     $this->db->from('Avaliacao');
    //     $this->db->where('datarefeicao', $dia);
    //     $bebida = $this->db->get();

    //     $this->db->select_sum('atendimento');
    //     $this->db->from('Avaliacao');
    //     $this->db->where('datarefeicao', $dia);
    //     $atendimento = $this->db->get();

    //     return ($alimento->row()->alimento+$bebida->row()->bebida+$atendimento->row()->atendimento)/(3*$nAvaliacoes);
    // }
}