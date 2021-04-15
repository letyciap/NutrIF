<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

  public function cadastro() {

    $this->load->model('Dieta_model');
    $dados["dietas"] = $this->Dieta_model->recuperarTodos();

    $this->load->model('Etnia_model');
    $dados["etnias"] = $this->Etnia_model->recuperarTodos();

    $this->load->model('Alergia_model');
    $dados["alergias"] = $this->Alergia_model->recuperarTodos();

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

    $this->load->model('TipoRefeicao_model');
    $dados["tiporefeicao"] = $this->TipoRefeicao_model->recuperarTodos();
    
    $this->load->view('aluno/cadastro-aluno', $dados);
    $this->load->view('footer');
  }

  public function salvar() {
    $this->load->model('Usuario_model');

    $this->Usuario_model->matricula = $this->input->post('matricula');
    $this->Usuario_model->usuario = $this->input->post('usuario');
    $this->Usuario_model->senha = $this->input->post('senha');
    $this->Usuario_model->codcampus = $this->input->post('codcampus');
    $this->Usuario_model->datanascimento = $this->input->post('datanascimento');
    $this->Usuario_model->datacadastro = $this->input->post('datacadastro');
    $this->Usuario_model->codgenero = $this->input->post('codgenero');
    $this->Usuario_model->codeetnia = $this->input->post('codeetnia');
    $this->Usuario_model->altura = $this->input->post('altura');
    $this->Usuario_model->peso = $this->input->post('peso');
    $this->Usuario_model->codfreqconsumocampus = $this->input->post('codfreqconsumocampus');
    $this->Usuario_model->coddieta = $this->input->post('coddieta');
    $this->Usuario_model->codsatisfacaocorpo = $this->input->post('codsatisfacaocorpo');
    $this->Usuario_model->codfrequenciafome = $this->input->post('codfrequenciafome');
    $this->Usuario_model->outraalergia = $this->input->post('outraalergia');

    $this->Usuario_model->inserir();

    redirect('aluno/cadastro-realizado');
  }

  function listar() {
    $dados_header["titulo"] = "Usuário";
    $this->load->view('admin/header', $dados_header);

    $this->load->model('Usuario');        
    $dados["alergias"] = $this->Usuario_model->recuperarTodos();
    $this->load->view('admin/usuario', $dados);

    $this->load->view('admin/footer');
  }

  public function cadastro_realizado()
  	{
    $this->load->view('aluno/cadastro-realizado');
    $this->load->view('footer');
  	}

  
}