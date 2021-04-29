<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $dados['tabelas'] = $this->db->list_tables();

        $this->load->view('admin/header',$dados);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function estatisticas(){

        $this->load->model("Avaliacao_model");

            $dia='2021-04-06';

            //$segunda = $this->nomeDoModel->media($dia);
            //$dados['segunda'] = json_encode(number_format($segunda, 1));

            // $terca = $this->Avaliacao_model->media($dia);
            // $dados['terca'] = json_encode(number_format($terca, 1));

            //[...]

        
        $this->load->model('Campus_model');
        $dados["campus"] = $this->Campus_model->recuperarTodos();

        $this->load->model('Alergia_model');
        $dados["alergias"] = $this->Alergia_model->recuperarTodos();

        $this->load->model('Dieta_model');
        $dados["dietas"] = $this->Dieta_model->recuperarTodos();

        $this->load->model('TipoRefeicao_model');
        $dados["tiporefeicao"] = $this->TipoRefeicao_model->recuperarTodosMenosND();
    
        
        $this->load->view('admin/header');
        $this->load->view('avaliacoes/estatisticas', $dados);
        $this->load->view('admin/footer');
    }

}