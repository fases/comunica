<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacoes extends CI_Controller {

    public function cadastro(){
        $this->load->view('templates/header');
        $this->load->view('solicitacoes/cadastro');
        $this->load->view('templates/footer');
    }

        public function material(){  
        $this->load->view('templates/header');
        $this->load->view('solicitacoes/material');
        $this->load->view('templates/footer');
    }
        public function cobertura(){
        $this->load->view('templates/header');

        $this->load->model('evento_model'); //carrega o model
        $data['eventos'] = $this->evento_model->consultar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/cobertura',$data);
        $this->load->view('templates/footer');
    }

        public function editar($id){

        $this->load->model('evento_model');
        $evento = $this->evento_model->localizar($id);
        print_r($evento);
        }

        public function noticias(){
        $this->load->view('templates/header');

        $this->load->model('noticia_model'); //carrega o model
        $data['noticias'] = $this->noticia_model->consultar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/noticias',$data);
        $this->load->view('templates/footer');
    }
        public function emprestimos(){
        $this->load->view('templates/header');
        $this->load->view('solicitacoes/emprestimos');
        $this->load->view('templates/footer');
    }

}
