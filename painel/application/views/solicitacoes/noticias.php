<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Notícias</h1>

       <?php $this->mensagem_model->exibir(); ?>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->


        <!-- Filtro de busca -->

        <div class="ls-box-filter">

        <form method="post" class="ls-form ls-form-inline">

                        <label class="ls-label col-md-6 col-sm-8">
                <b class="ls-label-text">Status</b>
                <div class="ls-custom-select ls-field-sm">
                    <select name="status" id="status" class="ls-select">
                        <option value="0" <?php if($this->uri->segment(3) == 0) echo "selected"; ?>>Todos</option>
                        <option value="1" <?php if($this->uri->segment(3) == 1) echo "selected"; ?>>Enviados</option>
                        <option value="2" <?php if($this->uri->segment(3) == 2) echo "selected"; ?>>Em andamento</option>
                        <option value="3" <?php if($this->uri->segment(3) == 3) echo "selected"; ?>>Concluídos</option>
                        <option value="4" <?php if($this->uri->segment(3) == 4) echo "selected"; ?>>Cancelados</option>
                    </select>
                </div>
            </label>
           
                                <label class="ls-label col-md-3 col-sm-4">
      <b class="ls-label-text">Período</b>
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_2" data-ls-module="popover" data-content="Escolha o período desejado e clique em 'Filtrar'."></span>
                    <input type="date" name="data_inicio" id="data_inicio" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" data-ls-daterange="#datepicker2">
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker1" href="#"></a>
                </div>
            </label>

            <label class="ls-label col-lg-2 col-md-3 col-sm-12">
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_3" data-ls-module="popover" data-content="Clique em 'Filtrar' para exibir  o período selecionado."></span>
                    <input type="date" name="data_fim" id="data_fim" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" data-ls-daterange="#datepicker2" >
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker2" href="#"></a>
                </div>
            </label>

            <input type="submit" class="ls-btn-primary" value="Filtrar"/>

        </form>

    </div>

    <!-- Lista dos pedidos-->
    <?php if( count($noticias)>0){ ?>

<table class="ls-table">
        <thead>
            <tr>
               <th>ID</th>
               <th>Data do pedido</th>
                <th>Solicitante</th>
                <th>Data para publicação</th>
                <th class="ls-txt-center hidden-xs">Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <!-- Abre o foreach--> <?php 
        foreach ($noticias as $noticia) { 
            ?>
            
            
            <tr>
                <td>
                    <?php echo '#'. $noticia['id'];?>
                </td>
                <td>
                <?php echo date ("d/m/Y \à\s H:i", strtotime($noticia['data_cadastro']));?>
                </td>

                <td>
                    <a href="<?php echo base_url() ?>usuarios/visualizar/<?php echo $noticia['usuario']->id;?>"><?php echo $noticia['usuario']->nome;?></a>
                    
                </td>
                <td>
                <?php echo date ("d/m/Y", strtotime($noticia['data_publicacao']));?>

                </td>
                <td class="ls-txt-center hidden-xs">
                <?php
                  switch ($noticia['status']){
                    case 1:
                     echo "Enviado";
                      break;
                    case 2:
                      echo "Em andamento";
                      break;
                    case 3:
                      echo "Concluído";
                      break;
                    case 4:
                      echo "Cancelado";
                      break;
                  }
                ?>
                </td>
                <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>noticias/visualizar/<?php echo $noticia['id'];?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">

                        <a href="<?php echo base_url() ?>noticias/" class="ls-btn ls-btn-sm" aria-expanded="false" role="combobox">Status</a>
                        <ul class="ls-dropdown-nav" aria-hidden="true">
                            <li><a href="<?php echo base_url() ?>noticias/aprovar/<?php echo $noticia['id'];?>" class="ls-color-danger" role="option">Em andamento</a></li>
                            <li><a href="<?php echo base_url() ?>noticias/concluir/<?php echo $noticia['id'];?>"  role="option">Concluido</a></li>
                        </ul>
                    </div>

                </td>
            </tr>

            <?php }?> <!-- Fecha o foreach-->
        </tbody>
    </table>

    <?php }else{?>

        <div class="ls-alert-danger" role="alert"><strong>Vish!</strong> Nenhum resultado foi encontrado para sua pesquisa.</div>

       <?php }?>
</div>
