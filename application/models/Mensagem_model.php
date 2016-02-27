<?php

class Mensagem_model extends CI_Model 
{

	public function __construct($arr = null)
	{
		parent::__construct();
	}

	public function exibir()
	{
		$mensagem = $this->session->flashdata('mensagem');
		if(!empty($mensagem))
		{
			// $mensagem = $this->session->flashdata('mensagem');

			$icon = null;
			$tipo = null;

			switch($mensagem['tipo']) {
				case 'danger':
				case 'erro':
				case 'error':
					$icon = 'ban';
					$tipo = 'danger';
					break;
				case 'success':
				case 'sucesso':
					$icon = 'check';
					$tipo = 'success';
					break;
				case 'warning':
				case 'atencao':
					$icon = 'warning';
					$tipo = 'warning';
					break;
				case 'info':
					$icon = 'info';
					$tipo = 'info';
					break;
			}

			echo '
              <div class="alert alert-' . $tipo . ' alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-' . $icon . '"></i> ' . $mensagem['texto'] . '
              </div>
			';
		}
	}
}

?>