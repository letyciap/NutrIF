<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Campus";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('Campus');        
        $dados["alergias"] = $this->Campus_model->recuperarTodos();
        $this->load->view('admin/campus', $dados);
  
        $this->load->view('admin/footer');
      }
}