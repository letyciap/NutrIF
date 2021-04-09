<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
        public $matricula;
        public $usuario;
        public $senha;
        public $codcampus;
        public $datanascimento;
        public $codgenero;
        public $codeetnia;
        public $altura;
        public $peso;
        public $freqconsumocampus;
        public $coddieta;
        public $codsatisfacaocorpo;
        public $codfrequenciafome;
        public $cadastro

        public function __construct() {
            parent::__construct();
        }

        public function inserir() {
            $dados = array(
                public function inserir() {
                    $dados = array(
                        'matricula' => $this->matricula,
                        'usuario' => $this->usuario,
                        'senha' => $this->senha,
                        'codcampus' => $this->codcampus,
                        'datanascimento' => $this->datanascimento,
                        'codgenero' => $this->codgenero,
                        'codeetnia' => $this->codetnia,
                        'altura' => $this->altura,
                        'peso' => $this->peso,
                        'freqconsumocampus' => $this->freqconsumocampus,
                        'coddieta' => $this->coddieta,
                        'codsatisfacaocorpo' => $this->codsatisfacaocorpo,
                        'codfrequenciafome' => $this->codfrequenciafome,s
                        'cadastro' => $this->cadastro

                    );
                    return $this->db->insert('post', $dados);
                }
                )
        }
}
