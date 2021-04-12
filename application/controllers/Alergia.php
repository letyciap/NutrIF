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
}