<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $dados['tabelas'] = $this->db->list_tables();

        $this->load->view('admin/header',$dados);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function estatisticas() {
        $this->load->model('Campus_model');
        $dados["campus"] = $this->Campus_model->recuperarTodos();

        $this->load->view('admin/header');
        $this->load->view('avaliacoes/estatisticas', $dados);
        $this->load->view('admin/footer');
    }

}