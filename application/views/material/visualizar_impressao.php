<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $impressao->id; ?>                         

   <?php

    switch ($impressao->status) {
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

  switch ($impressao->status) {
   case 1:
   echo '<a href='.base_url().'material/aprovar_impressao/'.$impressao->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'material/suspender_impressao/'.$impressao->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'material/concluir_impressao/'.$impressao->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>

 
 
 <a <?php echo '<a href='.base_url().'solicitacoes/material/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->



<div class="ls-box ">
<div class="col-md-8">
      <p><strong>Solicitante</strong></p>
      <p class="ls-break-text"><?php echo $usuario_impressao->nome; ?></p>
      <hr>
      <p><strong>Contato</strong></p>
      <p class="ls-break-text"><?php echo $usuario_impressao->email; ?></p>

  </div>

  <div class="col-md-3">
    <div class="ls-box ls-box-gray">
          <p><strong>Aberta em:</strong></p>
      <p class="ls-break-text"><?php echo date ("d/m/Y \à\s H:i", strtotime($impressao->data_cadastro));?></p>
            
        

    </div>
    </div>
    </div>

    <div class="ls-box ">
<div class="col-md-12">
      <p><strong>Tipo</strong></p>
      <p class="ls-break-text"><?php echo $impressao->tipo_material ?></p>
      <hr>

    <p><strong>Dimensão de material</strong></p>
      <p class="ls-break-text"><?php echo $impressao->tipo_papel ?></p>

  </div>

  <!--<div class="col-md-3">
      <p><strong> Data do empréstimo e Horário</strong></p>
      <p class="ls-break-text">25/02/2015 as 02:15</p>
      <hr>
      <p><strong>Data da devolução e Horário</strong></p>
      <p class="ls-break-text">27/02/2015 as 02:15</p>
      <hr>
        <p><strong>Quantidade</strong></p>
      <p class="ls-break-text">1</p>
    </div> -->

  <div class="col-md-12">
       <hr>
<div class="ls-box ls-box-gray">
          <p><strong>Justificativa</strong></p>
      <p class="ls-break-text"><?php echo $impressao->justificativa ?></p>
    </div>


    </div>

    </div>

<ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#track">Anexos</a></li>
  <li><a data-ls-module="tabs" href="#laps">Links</a></li>
</ul>
<div class="ls-tabs-container">
  <div id="track" class="ls-tab-content ls-active">
    <span class="ls-ico-link ls-ico-left"><a href="<?php echo $impressao->arquivo_1 ?>" target="_blank">Clique aqui para visualizar</a></span>

  </div>
  <div id="laps" class="ls-tab-content">
    <span class="ls-ico-link ls-ico-left"><?php echo $impressao->url_1 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $impressao->url_2 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $impressao->url_3 ?></span>
  </div>
</div>

              <div class="ls-actions-btn">
  <?php

  switch ($impressao->status) {
   case 1:
   echo '<a href='.base_url().'material/aprovar_impressao/'.$impressao->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'material/suspender_impressao/'.$impressao->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'material/concluir_impressao/'.$impressao->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>
        <a <?php echo '<a href='.base_url().'solicitacoes/material/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>
      </div>

    </div>
</div>
