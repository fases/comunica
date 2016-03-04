<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
        }

        $tipo_usuario = $this->session->userdata('usuario')->tipo_acesso;

        //var_dump($tipo_usuario); die();
        switch($tipo_usuario) {
            case '1':
            $this->template = 'header_admin';
            break;
            case '2':
            $this->template = 'header_servidor';
            break;
            case '3':
            $this->template = 'header_aluno';
            break;
            default:
            redirect(base_url('logout'));
        }
    }

    public function index()
    {

        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('assunto', 'Assunto', 'required');
            $this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
            
            if($this->form_validation->run() == TRUE){

                $this->load->model('contato_model');

                $contato = new Contato_model($form);
            //var_dump($contato); die();
                $contato->cadastrar();


                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'E-mail de contato enviado com sucesso!'));

                redirect(base_url('/contato'));

            }else{

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'error', 'texto' => 'Algo está errado, tente novamente!'));

            }
        }



        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('contato');
        $this->load->view('templates/footer');

        //var_dump($this->session->userdata('usuario')->email);die();
    }

    public function listar(){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $this->load->model('contato_model'); //carrega o model

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['contatos'] = $this->contato_model->listar(); //cria variável, realiza a consulta e organiza em uma array;

        $this->load->view('templates/' . $this->template, $data);          

        //var_dump($data);die();

        $this->load->view('contato/listar');
        $this->load->view('templates/footer');
    }



    public function visualizar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $this->load->model('usuario_model');
        $this->load->model('contato_model');
        $this->load->model('comentario_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['contato'] = $this->contato_model->consultar($id);//carrega apenas a notícia pelo id;
        $data['usuario_contato'] = $this->usuario_model->consultar($data['contato']->id_usuario);
        $data['comentarios'] = $this->comentario_model->listar($id);

        //echo "<pre>";
        //var_dump($data);die('</pre>');

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('contato/visualizar',$data);
        $this->load->view('templates/footer');


    }

    public function aprovar($id){


        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }
         $this->load->model('contato_model'); //carrega o model
         $this->contato_model->aprovar($id);
         redirect(base_url().'contato/visualizar/'.$id);
         
     }

     public function concluir($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

         $this->load->model('contato_model'); //carrega o model
         $this->contato_model->concluir($id);
         redirect(base_url().'contato/visualizar/'.$id);
         
     }

     public function suspender($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

         $this->load->model('contato_model'); //carrega o model
         $this->contato_model->suspender($id);
         redirect(base_url().'contato/visualizar/'.$id);
         
     }
     
     public function cadastrar_comentario(){

        //echo "oi, eu sou a action!";

        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
            
            if($this->form_validation->run() == TRUE){

                $this->load->model('comentario_model');

                $comentario = new Comentario_model($form);
            //var_dump($comentario); die();
                $comentario->cadastrar();

                //var_dump($comentario->id_contato);die();

                redirect(base_url('/contato/visualizar/'.$comentario->id_contato));

            }else{

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'error', 'texto' => 'Algo está errado, tente novamente!'));

            }

        }

    }
}
