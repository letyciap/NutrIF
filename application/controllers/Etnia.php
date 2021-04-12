<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etnia extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Etnia";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('Etnia');        
        $dados["alergias"] = $this->Etnia_model->recuperarTodos();
        $this->load->view('admin/etnia', $dados);
  
        $this->load->view('admin/footer');
      }
}