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

        $data = array( // cria array;
            'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('templates/' . $this->painel, $data);
        $this->load->view('templates/footer');
	}


}