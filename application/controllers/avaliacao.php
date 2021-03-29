<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacao extends CI_Controller {

  public function avaliacao()
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

  public function edstatisticas()
  {
    $this->load->view('aluno/header-aluno');
    $this->load->view('avaliacoes/estatisticas');
    $this->load->view('footer');
  }

}