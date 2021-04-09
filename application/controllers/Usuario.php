<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function cadastro()
  	{
        $this->load->model('Dieta_model');
        $dados["dietas"] = $this->Dieta_model->recuperarTodos();

        $this->load->model('Etnia_model');
        $dados["etnias"] = $this->Etnia_model->recuperarTodos();

        $this->load->model('Campus_model');
        $dados["campus"] = $this->Campus_model->recuperarTodos();

        $this->load->model('FreqConsumoCampus_model');
        $dados["freqconsumocampus"] = $this->FreqConsumoCampus_model->recuperarTodos();

        $this->load->model('Genero_model');
        $dados["generos"] = $this->Genero_model->recuperarTodos();

        $this->load->model('SatisfacaoCorpo_model');
        $dados["satisfacaocorpo"] = $this->SatisfacaoCorpo_model->recuperarTodos();

        $this->load->model('FrequenciaFome_model');
        $dados["frequenciafome"] = $this->FrequenciaFome_model->recuperarTodos();
        
        $this->load->view('aluno/cadastro-aluno', $dados);
        $this->load->view('footer');
  	}

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