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

     <h1 class="ls-title">

    <?php

    switch ($evento->status) {
     case 1:
     echo '<div class="ls-alert-info "><strong>Atenção!</strong> Sua solicitação ficará pendente até que o Administrador aprove.</div>';
     break;
     case 2:
     echo '<div class="ls-alert-warning "><strong>Atenção!</strong> Sua solicitação está em andamento, em até 48h ela será concluída.</div>';
     break;
     case 3:
     echo '<div class="ls-alert-sucess"><strong>Bazinga!</strong> Sua solicitação já foi concluída, para mais informações entre em contato com administrador</div>';
     break;
   } 


   ?>

 </h1>
    </h1> 


        <!-- Apartir daqui, vocês devem inserir os componentes na página -->




    <div class="ls-box ">
<div class="col-md-8">
      <p><strong>Tipo</strong></p>
      <p class="ls-break-text">Cobertura de eventos</p>
      <hr>

    <p><strong>Local:</strong></p>
      <p class="ls-break-text"><?php echo $local->nome ?></p>

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



      <a <?php echo '<a href='.base_url().'pedidos/'?> aria-expanded="false" class="ls-btn ls-float-right">Voltar</a>

    </div>
</div>