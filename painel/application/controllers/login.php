<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        if($this->usuario_model->logado())
            redirect(base_url());

        $usuario_invalido=FALSE;
        $usuario_valido=FALSE;


        if($this->input->post()) {
            $form = $this->input->post();

            $email = $this->input->post('email');
            $senha   = md5($this->input->post('senha'));

            $this->db->where('email',$email);
            $this->db->where('senha',$senha);
            $this->db->where('status',1);
            


            $usuario = $this->db->get('usuario')->result();

          
            if ($usuario){
               $newdata = array(
                  'usuario'  => $usuario[0]
                  );

               $newdata['usuario']->senha = NULL;

               $this->session->set_userdata($newdata);
               redirect(base_url(), 'refresh');
           }else{
            $usuario_invalido=TRUE;
        }




    }


    $data = array(
       'usuario_invalido' => $usuario_invalido,
       'usuario_valido' => $usuario_valido
       );    

    $this->load->view('login',$data);
}

public function cadastrar()
    {
        $usuario_invalido=FALSE;
        $usuario_valido=FALSE;

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
                //print_r($form); die();

                $usuario = new Usuario_model($form);
                $usuario->cadastrar();

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 

                $usuario_valido=TRUE;
            }else{
                $usuario_invalido=TRUE;
            }
        }

    $data = array(
       'usuario_invalido' => $usuario_invalido,
       'usuario_valido' => $usuario_valido
       );  
        $this->load->view('login',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */