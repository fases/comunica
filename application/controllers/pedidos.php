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

        $this->load->view('templates/header');
        $this->load->view('pedidos');
        $this->load->view('templates/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */