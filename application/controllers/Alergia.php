<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alergia extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Lista de Alergias";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('Alergia_model');        
        $dados["alergias"] = $this->Alergia_model->recuperarTodos();
        $this->load->view('admin/alergias', $dados);
  
        $this->load->view('admin/footer');
      }

      function salvar(){

        $this->load->model('Alergia_model');

        $this->Alergia_model->codalergia = $this->input->post('codalergia');
        $this->Alergia_model->alergia = $this->input->post('alergia');
        $this->Alergia_model->inserir();

        redirect('alergias/listar');
    }

    function editar(){

      $alergia = $this->input->post('alergia');
      $codalergia = $this->input->post('codalergia');
      $this->load->model('Alergia_model');
      $this->Alergia_model->atualizar($codalergia, $alergia);

      redirect('alergias/listar');
  }

  function excluir(){

    //$alergia = $this->input->post('alergia');
    $codalergia = $this->input->post('codalergia');
    $this->load->model('Alergia_model');
    $this->Alergia_model->excluir($codalergia);

    redirect('alergias/listar');
  }
}