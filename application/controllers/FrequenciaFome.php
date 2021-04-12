<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrequenciaFome extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Frequencia Fome";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('FrequenciaFome');        
        $dados["alergias"] = $this->FrequenciaFome_model->recuperarTodos();
        $this->load->view('admin/frequenciafome', $dados);
  
        $this->load->view('admin/footer');
      }
}