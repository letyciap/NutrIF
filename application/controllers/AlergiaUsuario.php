<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlergiaUsuario extends CI_Controller {
    
    function listar() {
        $dados_header["titulo"] = "Lista de Alergias Do Usuário";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('AlergiaUsuario_model');        
        $dados["alergiausuario"] = $this->AlergiaUsuario_model->recuperarTodos();
        $this->load->view('admin/alergiausuario', $dados);
  
        $this->load->view('admin/footer');
      }

      function salvar(){

        $this->load->model('AlergiaUsuario_model');

        $this->AlergiaUsuario_model->codalergia = $this->input->post('codalergia');
        $this->AlergiaUsuario_model->matricula = $this->input->post('matricula');
        $this->AlergiaUsuario_model->inserir();

        redirect('alergiausuario/listar');
    }

    function editar(){

      $matricula = $this->input->post('matricula');
      $codalergia = $this->input->post('codalergia');
      $this->load->model('AlergiaUsuario_model');
      $this->AlergiaUsuario_model->atualizar($codalergia, $matricula);

      redirect('alergiausuario/listar');
  }

  function excluir(){

    //$alergia = $this->input->post('alergia');
    $codalergia = $this->input->post('codalergia');
    $this->load->model('AlergiaUsuario_model');
    $this->AlergiaUsuario_model->excluir($codalergia);

    redirect('alergiausuario/listar');
  }
}