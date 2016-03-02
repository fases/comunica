<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $evento->id; ?> 

  <?php

    switch ($evento->status) {
     case 1:
     echo "<span class='ls-tag hidden-xs'> Pendente </span> ";
     break;
     case 2:
     echo "<span class='ls-tag-warning'>Em andamento</span> ";
     break;
     case 3:
     echo "<span class='ls-tag-success'>Concluída</span>";;
     break;
   } 


   ?>
    </h1> 

 <h1 class="ls-title">

  <?php

  switch ($evento->status) {
   case 1:
   echo '<a href='.base_url().'eventos/aprovar/'.$evento->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'eventos/suspender/'.$evento->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'eventos/concluir/'.$evento->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>

 
 
 <a <?php echo '<a href='.base_url().'solicitacoes/cobertura/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->



<div class="ls-box ">
<div class="col-md-8">
      <p><strong>Solicitante</strong></p>
      <p class="ls-break-text"><?php echo $usuario_evento->nome; ?> </p>
      <hr>
      <p><strong>Contato</strong></p>
      <p class="ls-break-text"><?php echo $usuario_evento->email; ?></p>

  </div>

  <div class="col-md-3">
    <div class="ls-box ls-box-gray">
          <p><strong>Aberta em:</strong></p>
      <p class="ls-break-text"><?php echo $evento->data_cadastro ?></p>
            
      <!--  <hr>
      <p><strong>Aceita por:</strong></p>
      <p class="ls-break-text">Administrador</p> -->

    </div>
    </div>
    </div>

    <div class="ls-box ">
<div class="col-md-8">
      <p><strong>Tipo</strong></p>
      <p class="ls-break-text">Cobertura de eventos</p>
      <hr>

    <p><strong>Local:</strong></p>
      <p class="ls-break-text"><?php echo $local_evento->nome ?></p>

  </div>

  <div class="col-md-3">
      <p><strong> Data e Horário</strong></p>
      <p class="ls-break-text"><?php echo $evento->data ?> as <?php echo $evento->hora ?></p>
      <hr>

          <p><strong>Responsável</strong></p>
      <p class="ls-break-text"><?php echo $evento->responsavel ?></p>

    </div>

  <div class="col-md-12">
       <hr>
<div class="ls-box ls-box-gray">
          <p><strong>Justificativa</strong></p>
      <p class="ls-break-text"><?php echo $evento->descricao ?></p>
<hr>
          <p><strong>Observações</strong></p>
      <p class="ls-break-text"><?php echo $evento->obs ?></p>
    </div>


    </div>

    </div>



              <div class="ls-actions-btn">
      
       <?php

  switch ($evento->status) {
   case 1:
   echo '<a href='.base_url().'eventos/aprovar/'.$evento->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'eventos/suspender/'.$evento->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'eventos/concluir/'.$evento->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>
        <a <?php echo '<a href='.base_url().'solicitacoes/cobertura/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>
      </div>

    </div>
</div>
