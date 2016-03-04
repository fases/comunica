<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos extends CI_Controller {

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

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos',$data);
        $this->load->view('templates/footer');
    }

    public function noticias($id){

        $this->load->model('noticia_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['noticia'] = $this->noticia_model->consultar($id);//carrega apenas a notícia pelo id;
        //$data['usuario_noticia'] = $this->usuario_model->consultar($data['noticia']->id_usuario);

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos/noticia',$data);
        $this->load->view('templates/footer');

    }

        public function emprestimos($id){

        $this->load->model('emprestimo_model');
        $this->load->model('material_model');
        $this->load->model('local_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['emprestimo'] = $this->emprestimo_model->consultar($id);//carrega apenas o emprestimo pelo id;
        $data['local'] = $this->local_model->consultar($data['emprestimo']->id_local);
        $data['material'] = $this->material_model->consultar($data['emprestimo']->id_material);


        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos/emprestimo',$data);
        $this->load->view('templates/footer');


    }

    public function eventos($id){

        $this->load->model('evento_model');
        $this->load->model('local_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['evento'] = $this->evento_model->consultar($id);//carrega apenas o evento pelo id;
        $data['local'] = $this->local_model->consultar($data['evento']->id_local);


        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos/evento',$data);
        $this->load->view('templates/footer');


    }

    public function material_producao($id){

        $this->load->model('material_producao_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['producao'] = $this->material_producao_model->consultar($id);//carrega apenas a produção pelo id;
        

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos/producao',$data);
        $this->load->view('templates/footer');


    }

    public function material_impressao($id){

        $this->load->model('material_impressao_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['impressao'] = $this->material_impressao_model->consultar($id);//carrega apenas a produção pelo id;
        

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('pedidos/impressao',$data);
        $this->load->view('templates/footer');


    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */