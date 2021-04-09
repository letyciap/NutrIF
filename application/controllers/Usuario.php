<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function salvarDados(){
        $this->load->model('Usuario_model');

        $this->Usuario_model->matricula = $_POST['matricula'];
        $this->Usuario_model->usuario = $_POST['usuario'];
        $this->Usuario_model->senha = $_POST['senha'];
        $this->Usuario_model->codcampus = $_POST['codcampus'];
        $this->Usuario_model->datanascimento = $_POST['datanascimento'];
        $this->Usuario_model->datacadastro = $_POST['datacadastro'];
        $this->Usuario_model->codgenero = $_POST['codgenero'];
        $this->Usuario_model->codeetnia = $_POST['codeetnia'];
        $this->Usuario_model->altura = $_POST['altura'];
        $this->Usuario_model->peso = $_POST['peso'];
        $this->Usuario_model->freqconsumocampus = $_POST['freqconsumocampus'];
        $this->Usuario_model->coddieta = $_POST['coddieta'];
        $this->Usuario_model->codsatisfacaocorpo = $_POST['codsatisfacaocorpo'];
        $this->Usuario_model->codfrequenciafome = $_POST['codfrequenciafome'];
        
        $this->Usuario_model->inserir();
    }
}