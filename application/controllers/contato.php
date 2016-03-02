<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }
    }

    public function index()
    {

    if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('assunto', 'Assunto', 'required');
            $this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
            
            if($this->form_validation->run() == TRUE){

            

            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'success', 'texto' => 'E-mail de contato enviado com sucesso!'));

            }else{
       
            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'error', 'texto' => 'Algo está errado, tente novamente!'));

            }
        }



        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);
        $this->load->view('contato');
        $this->load->view('templates/footer');

        //var_dump($this->session->userdata('usuario')->email);die();
    }

    public function listar(){

        $this->load->model('contato_model'); //carrega o model

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['contatos'] = $this->contato_model->listar(); //cria variável, realiza a consulta e organiza em uma array;

        $this->load->view('templates/header',$data);          

        //var_dump($data);die();

        $this->load->view('contato/listar');
        $this->load->view('templates/footer');
    }



    public function visualizar($id){

        $this->load->model('usuario_model');
        $this->load->model('contato_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['contato'] = $this->contato_model->consultar($id);//carrega apenas a notícia pelo id;
        $data['usuario_contato'] = $this->usuario_model->consultar($data['contato']->id_usuario);


           $this->load->view('templates/header',$data);
           $this->load->view('contato/visualizar',$data);
           $this->load->view('templates/footer');


       }
    

}
