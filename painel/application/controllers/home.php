<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
		
	public function __construct(){
		parent::__construct();

        // colocar verificacao de usuario logado aqui!!

        if (!$this->session->userdata('usuario')){
   			redirect(base_url("login/"), 'refresh');
			}

		$tipo_usuario = $this->session->userdata('usuario')->tipo_acesso;

		//var_dump($tipo_usuario); die();
		switch($tipo_usuario) {
			case '1':
				$this->template = 'header_admin';
				$this->painel = 'painel_admin';
				break;
			case '2':
				$this->template = 'header_servidor';
				$this->painel = 'painel_usuario';
				break;
			case '3':
				$this->template = 'header_aluno';
				$this->painel = 'painel_aluno';
				break;
			default:
				redirect(base_url('logout'));
		}
	}
	
	public function index(){

       //print_r($usuario);die(); 

		// var_dump($this->session->userdata('usuario')); die();
		//$this->session['usuario'] = $usuario; //cria sessão com os dados do usuário;

		  $this->load->model('painel_model');

        $data = array();// cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['pedidos_pendentes'] = $this->painel_model->pedidos_consultar(1); //cria variável, realiza a consulta e organiza em uma array;
        $data['pedidos_recebidos'] = $this->painel_model->pedidos_consultar(2); //cria variável, realiza a consulta e organiza em uma array;
        $data['pedidos_concluidos'] = $this->painel_model->pedidos_consultar(3); //cria variável, realiza a consulta e organiza em uma array;
        $data['pedidos'] = $this->painel_model->pedidos();
         $data['pedidos_contato'] = $this->painel_model->pedidos_contato();

        //var_dump($data);die();

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('templates/' . $this->painel, $data);
        $this->load->view('templates/footer');
	}




}