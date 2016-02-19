<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function cadastrar(){

        // Envio de formulario será tratado aqui
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
            $this->form_validation->set_rules('senha', 'Senha', 'required|matches[confirma_senha]');
            $this->form_validation->set_rules('confirma_senha', 'Confirma Senha', 'required');

            if($this->form_validation->run() == TRUE){
                $this->load->model('usuario_model');


                $usuario = new Usuario_model($form);
                $usuario->cadastrar();

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 

            }
        }

        $this->load->view('templates/header');
        $this->load->view('usuarios/cadastrar');
        $this->load->view('templates/footer');
    }

        public function listar(){


        $this->load->view('templates/header');

        $this->load->model('usuario_model'); //carrega o model
        $data['usuarios'] = $this->usuario_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('usuarios/listar',$data);
        $this->load->view('templates/footer');
    }
        
        public function editar($id){

        $this->load->model('usuario_model');
        $this->load->view('templates/header');
        
        $usuario = $this->usuario_model->consultar($id);
        //print_r($usuario); die();
        $this->load->view('usuarios/editar',$usuario);
        $this->load->view('templates/footer');

        }

        public function excluir($id){

        $usuario = $this->usuario_model->excluir($id);

        }

        public function visualizar(){
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('usuarios/visualizar');
        $this->load->view('templates/footer');
    }

}
