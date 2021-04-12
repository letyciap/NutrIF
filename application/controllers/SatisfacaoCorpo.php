<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SatisfacaoCorpo extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Satisfacao Corpo";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('SatisfacaoCorpo');        
        $dados["alergias"] = $this->SatisfacaoCorpo_model->recuperarTodos();
        $this->load->view('admin/satisfacaocorpo', $dados);
  
        $this->load->view('admin/footer');
      }
}