<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function index()
    {
        $usuario_invalido=FALSE;
        $usuario_valido=FALSE;

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
                //print_r($form); die();

                $usuario = new Usuario_model($form);
                $usuario->cadastrar();

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 

                $usuario_valido=TRUE;
            }else{
                $usuario_invalido=TRUE;
            }
        }

    $data = array(
       'usuario_invalido' => $usuario_invalido,
       'usuario_valido' => $usuario_valido
       );  
        $this->load->view('cadastro',$data);
    }


}
