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
        $this->load->view('solicitacoes/cobertura');
        $this->load->view('templates/footer');
    }
        public function noticias(){
        $this->load->view('templates/header');
        $this->load->view('solicitacoes/noticias');
        $this->load->view('templates/footer');
    }
        public function emprestimos(){
        $this->load->view('templates/header');
        $this->load->view('solicitacoes/emprestimos');
        $this->load->view('templates/footer');
    }

}
