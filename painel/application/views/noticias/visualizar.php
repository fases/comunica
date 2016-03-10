<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $noticia->id; ?> 

    <?php

    switch ($noticia->status) {
     case 1:
     echo "<span class='ls-tag hidden-xs'> Pendente </span> ";
     break;
     case 2:
     echo "<span class='ls-tag-warning'>Em andamento</span> ";
     break;
     case 3:
     echo "<span class='ls-tag-success'>Concluída</span>";
     break;
     case 4:
     echo "<span class='ls-tag-danger'>Supensa</span>";
     break;
   } 


   ?> 

 <h1 class="ls-title">

  <?php

  switch ($noticia->status) {
   case 1:
   echo '<a href='.base_url().'noticias/aprovar/'.$noticia->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'noticias/suspender/'.$noticia->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'noticias/concluir/'.$noticia->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
   case 4:
   echo '<a class="ls-tooltip-right ls-btn-danger ls-btn-danger" aria-label="Esta solicitação foi suspensa por algum administrador" aria-expanded="false">Suspensa!</a>';
   break;
 } 


 ?>

 
 
 <a <?php echo '<a href='.base_url().'solicitacoes/noticias/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->



<div class="ls-box ">
<div class="col-md-8">
      <p><strong>Solicitante</strong></p>
      <p class="ls-break-text"><?php echo $usuario_noticia->nome ?></p>
      <hr>
      <p><strong>Contato</strong></p>
      <p class="ls-break-text"><?php echo $usuario_noticia->email?></p>

  </div>

  <div class="col-md-3">
    <div class="ls-box ls-box-gray">
          <p><strong>Aberta em:</strong></p>
      <p class="ls-break-text">
      <?php echo date ("d/m/Y \à\s H:i", strtotime($noticia->data_cadastro));?> </p>
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
      <?php echo date ("d/m/Y", strtotime($noticia->data_publicacao));?></p>

    </div>

  <div class="col-md-12">
       <hr>
<div class="ls-box ls-box-gray">
          <p><strong>Título</strong></p>
      <p class="ls-break-text"><?php echo $noticia->titulo ?></p>
<hr>
          <p><strong>Descrição</strong></p>
      <p class="ls-break-text"><?php echo $noticia->descricao ?></p>
    </div>


    </div>

    </div>

<ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#track">Anexos</a></li>
  <li><a data-ls-module="tabs" href="#laps">Links</a></li>
</ul>
<div class="ls-tabs-container">
  <div id="track" class="ls-tab-content ls-active">
    <?php if($noticia->arquivo_1){ ?>
    <span class="ls-ico-link ls-ico-left"><a href="<?php echo $noticia->arquivo_1 ?>" target="_blank">Clique aqui para visualizar</a></span>
     <?php }else{ ?>

     <div role="alert" class="ls-alert-info"><strong>Atenção:</strong> O usuário não enviou nenhum arquivo em anexo. </div>

    <?php }?>

  </div>
  <div id="laps" class="ls-tab-content">
    <?php if($noticia->url_1 | $noticia->url_2 | $noticia->url_2){ ?>
    <span class="ls-ico-link ls-ico-left"><?php echo $noticia->url_1 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $noticia->url_2 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $noticia->url_3 ?></span>
    <?php }else{ ?>

    <div role="alert" class="ls-alert-info"><strong>Atenção:</strong> O usuário não enviou nenhum link. </div>

    <?php }?>
  </div>
</div>



  <?php

  switch ($noticia->status) {
   case 1:
   echo '<a href='.base_url().'noticias/aprovar/'.$noticia->id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href='.base_url().'noticias/suspender/'.$noticia->id. ' class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href='.base_url().'noticias/concluir/'.$noticia->id. ' class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
   case 4:
   echo '<a class="ls-tooltip-right ls-btn-danger ls-btn-danger" aria-label="Esta solicitação foi suspensa por algum administrador" aria-expanded="false">Suspensa!</a>';
   break;
 } 


 ?>
        <a <?php echo '<a href='.base_url().'solicitacoes/noticias/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>
      </div>

    </div>
</div>
