<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
        public $matricula;
        public $usuario;
        public $senha;
        public $codcampus;
        public $datanascimento;
        public $datacadastro;
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

        public function nomeCompleto($matricula){
            $this->db->select('usuario');
            $this->db->where('matricula', $matricula); 
            $query = $this->db->get('Usuario');
            $nome = $query->row()->usuario;
            return $nome;
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

        function recuperarPorLoginESenha($matricula, $senha) {
            $sql = "SELECT * FROM Usuario WHERE matricula = ? AND senha = ?";
            $dados = array($matricula, $senha);
            return $this->db->query($sql, $dados)->result();
        }

        function recuperarPorMatricula($matricula) {
            $sql = "SELECT * FROM Usuario WHERE matricula = ?";
            $dados = array($matricula);
            return $this->db->query($sql, $dados)->result();
        }

        public function atualizar() {
            $dados = array(
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
            $this->db->where('matricula', $this->matricula);
            return $this->db->update('Usuario', $dados);
        }
    
        public function excluir($codalergia) {
            $sql = "DELETE FROM Usuario WHERE codalergia = ".$codalergia;
            $dados = array($sql, $dados);
            return $this->db->query($sql, $dados);
        } 
}
