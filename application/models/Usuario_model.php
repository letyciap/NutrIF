<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
        public $matricula;
        public $usuario;
        public $senha;
        public $codcampus;
        public $datanascimento;
        public $datacadastro;
        public $codgenero;
        public $codeetnia;
        public $altura;
        public $peso;
        public $codfreqconsumocampus;
        public $coddieta;
        public $codsatisfacaocorpo;
        public $codfrequenciafome;
        public $cadastro;

        public function __construct() {
            parent::__construct();
        }

        public function inserir() {
            $dados = array(
                'matricula' => $this->matricula,
                'usuario' => $this->usuario,
                'senha' => $this->senha,
                'codcampus' => $this->codcampus,
                'datanascimento' => $this->datanascimento,
                'datacadastro' => $this->datacadastro,
                'codgenero' => $this->codgenero,
                'codeetnia' => $this->codeetnia,
                'altura' => $this->altura,
                'peso' => $this->peso,
                'codfreqconsumocampus' => $this->codfreqconsumocampus,
                'coddieta' => $this->coddieta,
                'codsatisfacaocorpo' => $this->codsatisfacaocorpo,
                'codfrequenciafome' => $this->codfrequenciafome,
                'outraalergia' => $this->outraalergia
            );
            return $this->db->insert('Usuario', $dados);
        }

        function recuperarTodos(){
            $sql = "SELECT * from Usuario";
            return $this->db->query($sql)->result();
        }
}