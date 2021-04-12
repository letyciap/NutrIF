<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoRefeicaoUsuario extends CI_Controller {

    function listar() {
        $dados_header["titulo"] = "Tipo de Refeição Usuário";
        $this->load->view('admin/header', $dados_header);
  
        $this->load->model('TipoRefeicaoUsuario');        
        $dados["alergias"] = $this->TipoRefeicaoUsuario_model->recuperarTodos();
        $this->load->view('admin/tiporefeicaousuario', $dados);
  
        $this->load->view('admin/footer');
      }
}