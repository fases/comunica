<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
		
	public function __construct(){
		parent::__construct();

        // colocar verificacao de usuario logado aqui!!
	}
	
	public function index(){		
        $this->load->view('templates/header');
        $this->load->view('templates/inicio');
        $this->load->view('templates/footer');
	}


}