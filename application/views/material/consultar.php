<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Consultar material</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

        <div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline ls-float-left">
    <label class="ls-label col-md-8 col-sm-8">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select">
        <select name="" class="ls-select">
          <option>Todos</option>
          <option>Disponíveis</option>
          <option>Emprestados</option>
        </select>
      </div>
    </label>
  </form>

  <form  action="" class="ls-form ls-form-inline ls-float-right">
    <label class="ls-label" role="search">
      <b class="ls-label-text ls-hidden-accessible">Material</b>
      <input type="text" id="q" name="q" aria-label="Faça sua busca por cliente" placeholder="Material" required="" class="ls-field">
    </label>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
    </div>
  </form>
</div>

       
<table class="ls-table ls-table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th class="hidden-xs">Nº de Patrimônio</th>
      <th>Status</th>
      <th>Situação</th>
      <th class="hidden-xs">Data de cadastro</th>
    </tr>
  </thead>
  <tbody>

            <?php 
        foreach ($materiais as $material ) { ?>


        <tr>
      <td><a href="<?php echo $material['id'];?>" title=""><?php echo $material['nome'];?></a></td>
      <td class="hidden-xs"><?php echo $material['patrimonio'];?></td>
      <td><?php 

      if($material['status']==0){
            echo "Disponível";
        }else{echo "Emprestado";}

        ?>

      </td>
      <td>
      <?php

      if($material['situacao']==1){
        echo "Funcional";
      }else{
        echo "Defeituoso";
      }

      ?></td>
      <td class="hidden-xs"> <!-- data de cadastro aquii --> </td>
    </tr>

        <?php } ?>
  </tbody>
</table>
</div>
