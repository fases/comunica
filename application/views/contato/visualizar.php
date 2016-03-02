<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Contato #00<?php echo $contato->id; ?> 

    <?php

    switch ($contato->status) {
     case 1:
     echo "<span class='ls-tag hidden-xs'> Pendente </span> ";
     break;
     case 2:
     echo "<span class='ls-tag-warning'>Em andamento</span> ";
     break;
     case 3:
     echo "<span class='ls-tag-success'>Concluída</span>";
     break;
   } 


   ?> 

 <h1 class="ls-title">

</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->



<div class="ls-box ">
<div class="col-md-8">
      <p><strong>Solicitante</strong></p>
      <p class="ls-break-text"><?php echo $usuario_contato->nome ?></p>
      <hr>
      <p><strong>Contato</strong></p>
      <p class="ls-break-text"><?php echo $usuario_contato->email?></p>

  </div>

  <div class="col-md-3">
    <div class="ls-box ls-box-gray">
          <p><strong>Aberta em:</strong></p>
      <p class="ls-break-text">
      <?php echo date ("d/m/Y \à\s H:i", strtotime($contato->data_cadastro));?> </p>
          <!--  <hr>
        <p><strong>Aceita por:</strong></p>
      <p class="ls-break-text">Administrador</p> -->

    </div>
    </div>
    </div>

    <div class="ls-box ls-box-gray">
 <div class="col-md-12">
          <p><strong>Assunto</strong></p>
      <p class="ls-break-text"><?php echo $contato->assunto ?></p>
<hr>
          <p><strong>Mensagem</strong></p>
      <p class="ls-break-text"><?php echo $contato->mensagem ?></p>



    </div>


 

    </div>



  <?php

  switch ($contato->status) {
   case 1:
   echo '<a href='.base_url().'contato/aprovar/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'contato/suspender/'.$contato->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'contato/concluir/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>
        <a <?php echo '<a href='.base_url().'contato/listar'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>
      </div>

    </div>
</div>
