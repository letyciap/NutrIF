<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Genero";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('Genero');        
        $dados["alergias"] = $this->Genero_model->recuperarTodos();
        $this->load->view('admin/genero', $dados);
  
        $this->load->view('admin/footer');
      }
}