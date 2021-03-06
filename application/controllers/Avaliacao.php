<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacao extends CI_Controller {

  public function index()
  {
    if  (! $this->session->userdata('usuario')) {
      $this->session->set_flashdata('msg', 'Você não tem permissão para acessar essa página. Por favor, Cadastre-se ou Faça Login.');
      redirect('login');
    }

    $this->load->view('aluno/header-aluno');
    $this->load->model('TipoRefeicao_model');
    $dados["tiporefeicao"] = $this->TipoRefeicao_model->recuperarTodosMenosNDA();
    $this->load->view('avaliacoes/avaliacao', $dados);
    $this->load->view('footer');
  }

  public function avaliacao_realizada()
  {
    $this->load->view('aluno/header-aluno');
    $this->load->view('avaliacoes/avaliacao-realizada');
    $this->load->view('footer');
  }

  public function estatisticas()
  {

    $this->load->model("Avaliacao_model");

		$dia='2021-04-06';

		//$segunda = $this->nomeDoModel->media($dia);
		//$dados['segunda'] = json_encode(number_format($segunda, 1));

		// $terca = $this->Avaliacao_model->media($dia);
		// $dados['terca'] = json_encode(number_format($terca, 1));

		//[...]

    
    $this->load->model('Campus_model');
    $dados["campus"] = $this->Campus_model->recuperarTodos();

    $this->load->model('Alergia_model');
    $dados["alergias"] = $this->Alergia_model->recuperarTodos();

    $this->load->model('Dieta_model');
    $dados["dietas"] = $this->Dieta_model->recuperarTodos();

    $this->load->model('TipoRefeicao_model');
    $dados["tiporefeicao"] = $this->TipoRefeicao_model->recuperarTodosMenosND();
  
    if (! $this->session->userdata('usuario')) {

      if($this->session->userdata('matricula' == 'admin')){
        $this->load->view('admin/header');
        $this->load->view('avaliacoes/estatisticas', $dados);
        $this->load->view('footer');
      }else {
        $this->load->view('aluno/header-aluno');
        $this->load->view('avaliacoes/estatisticas', $dados);
        $this->load->view('footer');
      }
    }
    else{
      $this->load->view('header');
      $this->load->view('avaliacoes/estatisticas', $dados);
      $this->load->view('footer');
    }
 
  }

  function listar() {
    $dados_header["titulo"] = "Avaliacao";
    $this->load->view('admin/header', $dados_header);

    $this->load->model('Avaliacao_model');        
    $dados["avaliacao"] = $this->Avaliacao_model->recuperarTodos();

    $this->load->model('Usuario_model');
    $dados["usuarios"] = $this->Usuario_model->recuperarTodos();

    $this->load->model('TipoRefeicao_model');
    $dados["tiporefeicoes"] = $this->TipoRefeicao_model->recuperarTodos();
    
    $this->load->view('admin/avaliacao', $dados);

    $this->load->view('admin/footer');
  } 

  function salvar(){

    $this->load->model('Avaliacao_model');

    $this->Avaliacao_model->codavaliacao = $this->input->post('codavaliacao');
    $this->Avaliacao_model->matricula = $this->input->post('matricula');
    $this->Avaliacao_model->codtiporefeicao = $this->input->post('codtiporefeicao');
    $this->Avaliacao_model->datarefeicao = $this->input->post('datarefeicao');
    $this->Avaliacao_model->alimento = $this->input->post('alimento');
    $this->Avaliacao_model->bebida = $this->input->post('bebida');
    $this->Avaliacao_model->atendimento = $this->input->post('atendimento');
    $this->Avaliacao_model->comentario = $this->input->post('comentario');
    $this->Avaliacao_model->inserir();

    redirect('aluno/avaliacao-realizada');
  }
}