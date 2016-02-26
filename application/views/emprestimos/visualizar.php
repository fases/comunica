<!-- Componentes na página -->

<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-arrow-right ">Solicitação #00<?php echo $id ?>


    <?php

    switch ($status) {
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

  switch ($status) {
   case 1:
   echo '<a href='.base_url().'emprestimos/aprovar/'.$id. ' class="ls-btn-primary ls-btn-sm ls-ico-plus">Aceitar</a>';

   echo '<a href="<?php echo base_url() ?>emprestimos/Suspender/<?php echo$usuario->id;?>" class="ls-btn-dark  ls-float-right">Suspender</a>';
   break;
   case 2:
   echo '<a href="<?php echo base_url() ?>emprestimos/concluir/<?php echo $id ?>" class="ls-btn-primary ls-btn-sm ls-ico-checkmark">Concluido</a>';
   break;
   case 3:
   echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
   break;
 } 


 ?>

 
 
 <a aria-expanded="false" onClick="JavaScript: window.history.back();" class="ls-btn ls-float-right">Voltar</a>

</h1>

<!-- Apartir daqui, vocês devem inserir os componentes na página -->



<div class="ls-box ">
  <div class="col-md-8">
    <p><strong>Solicitante</strong></p>
    <p class="ls-break-text"><?php echo $usuario->nome?></p>
    <hr>
    <p><strong>Contato</strong></p>
    <p class="ls-break-text">E-mail do solicitante</p>

  </div>

  <div class="col-md-3">
    <div class="ls-box ls-box-gray">
      <p><strong>Aberta em:</strong></p>
      <p class="ls-break-text"><?php echo $data_cadastro ?></p>
      
        <!--   <hr>
        <p><strong>Aceita por:</strong></p>
        <p class="ls-break-text">Administrador</p> -->

      </div>
    </div>
  </div>

  <div class="ls-box ">
    <div class="col-md-8">
      <p><strong>Tipo</strong></p>
      <p class="ls-break-text">Empréstimo de material</p>
      <hr>

      <p><strong>Local de uso do material</strong></p>
      <p class="ls-break-text"><?php echo $local ?></p>
      <hr>

      <p><strong>Material</strong></p>
      <p class="ls-break-text"> 
        <?php echo $material?>

        <!-- <?php echo $material->id ?> -->

      </p>

    </div>

    <div class="col-md-3">
      <p><strong> Data do empréstimo e Horário</strong></p>
      <p class="ls-break-text"><?php echo $data ?> as <?php echo $hora ?></p>
      <hr>
      <p><strong>Data da devolução e Horário</strong></p>
      <p class="ls-break-text"><?php echo $data_devolucao ?> as <?php echo $hora_devolucao ?></p>
      <hr>
        <!-- <p><strong>Quantidade</strong></p>
        <p class="ls-break-text"><?php echo $quantidade ?></p> -->
      </div>

      <div class="col-md-12">
       <hr>
       <div class="ls-box ls-box-gray">
        <p><strong>Justificativa</strong></p>
        <p class="ls-break-text"><?php echo $justificativa ?></p>
        <hr>
        <p><strong>Observações</strong></p>
        <p class="ls-break-text"><?php echo $obs ?></p>
      </div>


    </div>

  </div>



  <div class="ls-actions-btn">                                                <?php

    switch ($status) {
     case 1:
     echo '<a href="<?php echo base_url() ?>emprestimos/aprovar/<?php echo $id ?>" class="ls-btn-primary ls-btn-sm ls-ico-plus ls-float-left">Aceitar</a>';

     echo '<a href="<?php echo base_url() ?>emprestimos/Suspender/<?php echo$usuario->id;?>" class="ls-btn-dark  ls-float-right">Suspender</a>';
     break;
     case 2:
     echo '<a href="<?php echo base_url() ?>emprestimos/concluir/<?php echo $id ?>" class="ls-btn-primary ls-btn-sm ls-ico-checkmark ls-float-left">Concluido</a>';
     break;
     case 3:
     echo '<a class="ls-tooltip-right ls-btn" aria-label="Esta solicitação já foi atendida!" aria-expanded="false">Concluída!</a>';
     break;
   } 


   ?>

   
   
   <a aria-expanded="false" onClick="JavaScript: window.history.back();" class="ls-btn ls-float-right">Voltar</a>
 </div>

</div>
</div>
