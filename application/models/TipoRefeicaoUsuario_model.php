<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicaoUsuario_model extends CI_Model {
    public $codtiporefeicao;
    public $matricula;

    public function __construct() {
        parent::__construct();
    }

    function recuperarTodos(){
        $sql = "SELECT * from TipoRefeicaoUsuario";
        return $this->db->query($sql)->result();
    }

    function recuperarPorMatricula(){
        $matricula = $this->session->userdata('matricula');
        $sql = "SELECT * from TipoRefeicaoUsuario WHERE matricula = '".$matricula."'";
        return $this->db->query($sql)->result();
    }

    public function inserir() {
        $dados = array(
            'matricula' => $this->matricula,
            'codtiporefeicao' => $this->codtiporefeicao
        );

        return $this->db->insert('TipoRefeicaoUsuario', $dados);
    }

    // public function atualizar() {
    //     $sql = "UPDATE TipoRefeicaoUsuario SET codtiporefeicao = '".$codtiporefeicao."' WHERE matricula = '".$matricula."'";
    //     $dados = array($sql, $dados);
    //     return $this->db->query($sql, $dados);
    // }

    public function atualizar() {
        $sql = "DELETE * FROM TipoRefeicaoUsuario WHERE matricula = '".$matricula."'";
        $dadosOut = array($sql, $dados);
        $this->db->query($sql, $dadosOut);

        $dadosIn = array(
            'codtiporefeicao' => $this->codtiporefeicao,
            'matricula' => $this->matricula
        );

        return $this->db->insert('TipoRefeicaoUsuario', $dadosIn);
    }
}