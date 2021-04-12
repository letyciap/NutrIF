<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacao extends CI_Controller {

  public function index()
  {
    $this->load->view('aluno/header-aluno');
    $this->load->view('avaliacoes/avaliacao');
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
    $this->load->view('header');
    $this->load->view('avaliacoes/estatisticas');
    $this->load->view('footer');
  }

  function listar() {
    $dados_header["titulo"] = "Avaliacao";
    $this->load->view('admin/header', $dados_header);

    $this->load->model('Avaliacao_model');        
    $dados["alergias"] = $this->avaliacao_model->recuperarTodos();
    $this->load->view('admin/avaliacao', $dados);

    $this->load->view('admin/footer');
  } 
}