<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }


    }
    public function index()
    {

        $this->load->model('material_impressao_model'); //carrega o model
        $this->load->model('material_producao_model'); //carrega o model
        $this->load->model('emprestimo_model'); //carrega o model
        $this->load->model('evento_model'); //carrega o model
        $this->load->model('noticia_model'); //carrega o model

        $data = array();// cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['materiais_impressao'] = $this->material_impressao_model->consultar_usuario($this->session->userdata('usuario')->id); //cria variável, realiza a consulta e organiza em uma array
        $data['materiais_producao'] = $this->material_producao_model->consultar_usuario($this->session->userdata('usuario')->id); //cria variável, realiza a consulta e organiza em uma array
        $data['emprestimos'] = $this->emprestimo_model->consultar_usuario($this->session->userdata('usuario')->id); //cria variável, realiza a consulta e organiza em uma array
        $data['eventos'] = $this->evento_model->consultar_usuario($this->session->userdata('usuario')->id); //cria variável, realiza a consulta e organiza em uma array,
        $data['noticias'] = $this->noticia_model->consultar_usuario($this->session->userdata('usuario')->id); //cria variável, realiza a consulta e organiza em uma array

        //var_dump($id);die();
        //var_dump($data);die();

       //var_dump( $this->session->userdata('usuario')->id); die();

        $this->load->view('templates/header',$data);
        $this->load->view('pedidos',$data);
        $this->load->view('templates/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */