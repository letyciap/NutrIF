<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus extends CI_Controller {
  
  function listar() {
    $dados_header["titulo"] = "Campus";
    $this->load->view('admin/header', $dados_header);

    $this->load->model('Campus_model');        
    $dados["campus"] = $this->Campus_model->recuperarTodos();
    $this->load->view('admin/campus', $dados);

    $this->load->view('admin/footer');
  }

  function salvar(){

    $this->load->model('Campus_model');
  
    $this->Campus_model->codcampus = $this->input->post('codcampus');
    $this->Campus_model->campus = $this->input->post('campus');
    $this->Campus_model->inserir();
  
    redirect('admin/campus/listar');
  }
      
  function editar(){
    $this->load->model('Campus_model');

    $this->Campus_model->codcampus = $this->input->post('codcampus');
    $this->Campus_model->campus = $this->input->post('campus');
    $this->Campus_model->atualizar();
    
    redirect('admin/campus/listar');
  }
    
  function excluir(){
    
    //$campus = $this->input->post('campus');
    $codcampus = $this->input->post('codcampus');
    $this->load->model('Campus_model');
    $this->Campus_model->excluir($codcampus);
    
    redirect('admin/campus/listar');
  }  
      
}