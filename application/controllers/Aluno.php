<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function login()
  {
    $this->load->view('login');
  }

  public function sair()
  {
    redirect('index');
  }

	public function cadastro()
  	{
    
    $this->load->view('aluno/cadastro-aluno');
    $this->load->view('footer');
  	}

  public function editar_cadastro()
  	{
    $this->load->view('aluno/header-aluno');
    $this->load->view('aluno/editar-cadastro');
    $this->load->view('footer');
  	}
}