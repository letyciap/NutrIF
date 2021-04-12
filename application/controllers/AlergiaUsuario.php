<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlergiaUsuario extends CI_Controller {
    
    function listar() {
        $dados_header["titulo"] = "Lista de Alergias Do Usuário";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('AlergiaUsuario_model');        
        $dados["alergias"] = $this->AlergiaUsuario_model->recuperarTodos();
        $this->load->view('admin/alergiausuario', $dados);
  
        $this->load->view('admin/footer');
      }
}