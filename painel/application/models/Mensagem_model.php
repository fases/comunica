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
					$icon = 'close';
					$tipo = 'danger';
					break;
				case 'success':
				case 'sucesso':
					$icon = 'checkmark';
					$tipo = 'success';
					break;
				case 'warning':
				case 'atencao':
					$icon = 'bullhorn';
					$tipo = 'warning';
					break;
				case 'info':
					$icon = 'info';
					$tipo = 'info';
					break;
			}

			echo '
              <div class="ls-alert-' . $tipo . ' ls-dismissable">
                <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                <span class="ls-ico-' . $icon . '"></span> ' . $mensagem['texto'] . '
              </div>
			';
		}
	}
}

?>