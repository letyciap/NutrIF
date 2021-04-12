<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicao extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Tipo de Refeição";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('TipoRefeicao');        
        $dados["alergias"] = $this->TipoRefeicao_model->recuperarTodos();
        $this->load->view('admin/tiporefeicao', $dados);
  
        $this->load->view('admin/footer');
      }
}