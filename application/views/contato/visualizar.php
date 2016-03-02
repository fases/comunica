<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $contato->id; ?> 

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

  <?php

  switch ($contato->status) {
   case 1:
   echo '<a href='.base_url().'contatos/aprovar/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'contatos/suspender/'.$contato->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'contatos/concluir/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>

 
 
 <a <?php echo '<a href='.base_url().'solicitacoes/contatos/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

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

    <div class="ls-box ">
<div class="col-md-8">
      <p><strong>Tipo</strong></p>
      <p class="ls-break-text">Envio de notícias</p>

  </div>

  <div class="col-md-3">
      <p><strong>Data para publicação</strong></p>
      <p class="ls-break-text">
      <?php echo date ("d/m/Y", strtotime($contato->data_publicacao));?></p>

    </div>

  <div class="col-md-12">
       <hr>
<div class="ls-box ls-box-gray">
          <p><strong>Título</strong></p>
      <p class="ls-break-text"><?php echo $contato->titulo ?></p>
<hr>
          <p><strong>Descrição</strong></p>
      <p class="ls-break-text"><?php echo $contato->descricao ?></p>
    </div>


    </div>

    </div>

<ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#track">Anexos</a></li>
  <li><a data-ls-module="tabs" href="#laps">Links</a></li>
</ul>
<div class="ls-tabs-container">
  <div id="track" class="ls-tab-content ls-active">
    <span class="ls-ico-link ls-ico-left"><a href="<?php echo $contato->arquivo_1 ?>" target="_blank">Clique aqui para visualizar</a></span>

  </div>
  <div id="laps" class="ls-tab-content">
    <span class="ls-ico-link ls-ico-left"><?php echo $contato->url_1 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $contato->url_2 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $contato->url_3 ?></span>
  </div>
</div>



  <?php

  switch ($contato->status) {
   case 1:
   echo '<a href='.base_url().'contatos/aprovar/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'contatos/suspender/'.$contato->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'contatos/concluir/'.$contato->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>
        <a <?php echo '<a href='.base_url().'solicitacoes/contatos/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>
      </div>

    </div>
</div>
