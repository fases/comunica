<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

        public function __construct(){
        parent::__construct();

        // colocar verificacao de usuario logado aqui!!

        if (!$this->session->userdata('usuario')){
            redirect(base_url("login/"), 'refresh');
            }
    }

    public function cadastrar(){

                $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

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

        $this->load->view('templates/header',$data);
        $this->load->view('usuarios/cadastrar');
        $this->load->view('templates/footer');
    }

        public function listar(){

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );
       
        $this->load->view('templates/header',$data);

        $this->load->model('usuario_model'); //carrega o model
        $data['usuarios'] = $this->usuario_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('usuarios/listar',$data);
        $this->load->view('templates/footer');
    }

        public function aprovar($id){

            $this->db->where('id',$id);
            $this->db->update('usuario', array('status' => 1));

            redirect(base_url("solicitacoes/cadastro"));


        }
        
        public function editar($id){

            $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );


        $this->load->model('usuario_model');
        $this->load->view('templates/header', $data);
        
        $usuario = $this->usuario_model->consultar($id);


        if($this->input->post()) {
            $form = $this->input->post();
            //unset($form['confirma_senha']); // tem que fazer algo pra validar a senha antes de remover isso!
            $this->db->update('usuario', $form, array('id' => $id));
            $usuario = $this->usuario_model->consultar($id);
        }
        $this->load->view('usuarios/editar',$usuario);
        $this->load->view('templates/footer');

        }

        public function deletar($id){

    $this->load->model('usuario_model');
    if ($this->usuario_model->deletar($id)) {
        redirect(base_url("usuarios/listar"));
        $usuario_invalido=TRUE;
    } else {
        log_message('error', 'Erro ao deletar...');
    }

        }

    public function desativar($id){

    //$this->load->model('usuario_model');

    $this->db->where('id',$id);
    $this->db->update('usuario', array('status' => 3));

    $this->session->sess_destroy();
    redirect(base_url(), 'refresh');

        }

        public function visualizar($id){

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->model('usuario_model');
        $this->load->view('templates/header',$data);
        
        $usuario = $this->usuario_model->consultar($id);


        if($this->input->post()) {

            $form = $this->input->post();
            unset($form['confirma_senha']); // tem que fazer algo pra validar a senha antes de remover isso!
            $this->db->update('usuario', $form, array('id' => $id));
            $usuario = $this->usuario_model->consultar($id);
        }
        $this->load->view('usuarios/visualizar',$usuario);
        $this->load->view('templates/footer');

        }

        public function alterar_senha(){

            if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('id', 'ID', 'required');
            $this->form_validation->set_rules('senha', 'Senha', 'required|matches[confirma_senha]');
            $this->form_validation->set_rules('confirma_senha', 'Confirma Senha', 'required');

            if($this->form_validation->run() == TRUE){

            $usuario = new Usuario_model((array) $this->usuario_model->consultar($form['id']));

            //var_dump($usuario); die();

            $usuario->senha = md5($form['senha']);

            $usuario->atualizar();

            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'success', 'texto' => 'Alteração realizada com sucesso!'));

            redirect(base_url('usuarios/visualizar/'.$form['id']));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            }

        }


        }

                public function senha(){

            if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('id', 'ID', 'required');
            $this->form_validation->set_rules('senha', 'Senha', 'required|matches[confirma_senha]');
            $this->form_validation->set_rules('confirma_senha', 'Confirma Senha', 'required');

            if($this->form_validation->run() == TRUE){

            $usuario = new Usuario_model((array) $this->usuario_model->consultar($form['id']));

            //var_dump($usuario); die();

            $usuario->senha = md5($form['senha']);

            $usuario->atualizar();

            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'success', 'texto' => 'Alteração de senha realizada com sucesso!'));

            redirect(base_url('perfil'));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            }

        }
        

        }


}
