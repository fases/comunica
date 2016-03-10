<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $producao->id; ?>                         

   <?php

    switch ($producao->status) {
     case 1:
     echo "<span class='ls-tag hidden-xs'> Pendente </span> ";
     break;
     case 2:
     echo "<span class='ls-tag-warning'>Em andamento</span> ";
     break;
     case 3:
     echo "<span class='ls-tag-success'>Concluída</span>";;
     break;
     case 4:
     echo "<span class='ls-tag-danger'>Cancelada</span>";;
     break;
   } 


   ?>

     <h1 class="ls-title">

    <?php

    switch ($producao->status) {
     case 1:
     echo '<div class="ls-alert-info "><strong>Atenção!</strong> Sua solicitação ficará pendente até que o Administrador aprove.</div>';
     break;
     case 2:
     echo '<div class="ls-alert-warning "><strong>Atenção!</strong> Sua solicitação está em andamento, em até 48h ela será concluída.</div>';
     break;
     case 3:
     echo '<div class="ls-alert-sucess"><strong>Bazinga!</strong> Sua solicitação já foi concluída, para mais informações entre em contato com administrador</div>';
     break;
     case 4:
     echo '<div class="ls-alert-danger"><strong>Vish!</strong> Sua solicitação foi cancelada pelo administrador, para mais informações entre em contato com administrador.</div>';
     break;
   } 


   ?>

 </h1>

    </h1> 


        <!-- Apartir daqui, vocês devem inserir os componentes na página -->


    <div class="ls-box ">
<div class="col-md-12">

    <p><strong>Tipo/Dimensão de material</strong></p>
      <p class="ls-break-text"><?php echo $producao->tipo?></p>

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
      <p class="ls-break-text"><?php echo $producao->justificativa ?></p>
    </div>


    </div>

    </div>

<ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#track">Anexos</a></li>
  <li><a data-ls-module="tabs" href="#laps">Links</a></li>
</ul>
<div class="ls-tabs-container">
  <div id="track" class="ls-tab-content ls-active">
    <span class="ls-ico-link ls-ico-left"><a href="<?php echo $producao->arquivo_1 ?>" target="_blank">Clique aqui para visualizar</a></span>

  </div>
  <div id="laps" class="ls-tab-content">
    <span class="ls-ico-link ls-ico-left"><?php echo $producao->url_1 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $producao->url_2 ?></span>
    <hr>
    <span class="ls-ico-link ls-ico-left"><?php echo $producao->url_3 ?></span>
  </div>
</div>

         <a <?php echo '<a href='.base_url().'pedidos/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

    </div>
</div>