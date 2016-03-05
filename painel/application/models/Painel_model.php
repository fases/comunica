<?php

class Painel_model extends CI_Model {

    public function pedidos(){

        $eventos =  $this->db->count_all_results('eventos');
        $noticias =  $this->db->count_all_results('noticias');
        $emprestimo =  $this->db->count_all_results('emprestimo');
        $producao =  $this->db->count_all_results('producao');
        $impressao =  $this->db->count_all_results('impressao');
        $contato =  $this->db->count_all_results('contatos');

        $result = $eventos + $noticias + $emprestimo + $producao + $impressao + $contato;

        return $result;

    }

    public function pedidos_consultar($status){

        $this->db->like('status', $status);
        $this->db->from('eventos');
        $eventos = $this->db->count_all_results();

        $this->db->like('status', $status);
        $this->db->from('noticias');
        $noticias = $this->db->count_all_results();

        $this->db->like('status', $status);
        $this->db->from('emprestimo');
        $emprestimo = $this->db->count_all_results();

        $this->db->like('status', $status);
        $this->db->from('producao');
        $producao = $this->db->count_all_results();

        $this->db->like('status', $status);
        $this->db->from('impressao');
        $impressao = $this->db->count_all_results();

        $this->db->like('status', $status);
        $this->db->from('contatos');
        $contato = $this->db->count_all_results();

        $result = $eventos + $noticias + $emprestimo + $producao + $impressao + $contato;

        return $result;

    }

        public function pedidos_contato(){

        $this->db->like('status', 1);
        $this->db->from('contatos');
        $pendentes = $this->db->count_all_results();

        $this->db->like('status', 2);
        $this->db->from('contatos');
        $recebidos = $this->db->count_all_results();

        $result = $recebidos + $pendentes;

        return $result;

    }

}
