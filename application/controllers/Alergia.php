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

      function salvar(){

        $this->load->model('Alergia_model');

        $this->Alergia_model->codalergia = $this->input->post('codalergia');
        $this->Alergia_model->alergia = $this->input->post('alergia');

        // teste: os valores estão passando para o model e sendo inseridos no banco
        // problema: o $this->input->post('') não está recebendo os valores
        // $this->Alergia_model->codalergia = '16';
        // $this->Alergia_model->alergia = 'alergia teste';

        $this->Alergia_model->inserir();

        redirect('alergias/listar');
    }
}