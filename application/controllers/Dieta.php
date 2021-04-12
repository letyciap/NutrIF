<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dieta extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Dieta";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('Dieta');        
        $dados["alergias"] = $this->Dieta_model->recuperarTodos();
        $this->load->view('admin/dieta', $dados);
  
        $this->load->view('admin/footer');
      }
}