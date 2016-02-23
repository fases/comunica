<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
		
	public function __construct(){
		parent::__construct();

        // colocar verificacao de usuario logado aqui!!

        if (!$this->session->userdata('usuario')){
   			redirect(base_url("login/"), 'refresh');
			}
	}
	
	public function index(){

       //print_r($usuario);die(); 

		// var_dump($this->session->userdata('usuario')); die();
		//$this->session['usuario'] = $usuario; //cria sessão com os dados do usuário;

        $data = array(
            'usuario' => $this->session->userdata('usuario')
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/inicio', $data);
        $this->load->view('templates/footer');
	}


}