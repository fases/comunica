<style type="text/css">
.ls-table td, .ls-table th {
    font-size: 14px;
    padding: 12px;
    text-align: left;
}    
 
</style>
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Solicitações de Cadastros</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

        <!-- Filtro de busca -->

        <div class="ls-box-filter">

        <form method="post" class="ls-form ls-form-inline">
           
                                <label class="ls-label col-md-3 col-sm-4">
      <b class="ls-label-text">Período</b>
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_2" data-ls-module="popover" data-content="Escolha o período desejado e clique em 'Filtrar'."></span>
                    <input type="date" name="data_inicio" id="data_inicio" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" data-ls-daterange="#datepicker2" required>
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker1" href="#"></a>
                </div>
            </label>

            <label class="ls-label col-lg-2 col-md-3 col-sm-12">
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_3" data-ls-module="popover" data-content="Clique em 'Filtrar' para exibir  o período selecionado."></span>
                    <input type="date" name="data_fim" id="data_fim" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" data-ls-daterange="#datepicker2" required>
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker2" href="#"></a>
                </div>
            </label>

            <input type="submit" class="ls-btn-primary" value="Filtrar"/>

        </form>

    </div>

    <!-- Lista dos pedidos-->

    <?php if( count($usuarios)>0){ ?>

        <table class="ls-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th class="ls-txt-center hidden-xs">Status</th>
                <th ls-txt-center hidden-xs>Data</th>
            </tr>
        </thead>
                <tbody>
            
                    <?php 
        foreach ($usuarios as $usuario ) { ?>
            
            <tr>
                <td>
                    <a href="<?php echo base_url() ?>usuarios/visualizar/<?php echo $usuario['id'];?>">  <?php echo $usuario['nome'];?></a>
                    <?php 

                    if ($usuario['tipo_acesso']=='1') { ?>
                        <span class="ls-tag hidden-xs">
                       <?php echo "Administrador"; ?>
                        </span>
                   <?php 
 }

                    ?>
                    
                </td>
                <td>
                    <?php echo $usuario['email'];?>
                </td>
                <td class="ls-txt-center hidden-xs">

                <?php 

                if ($usuario['status']==0) {
                   echo "Pendente";

                } ?>

                </td>

                                                <td class="hidden-xs">
                    <?php echo date ("d/m/Y", strtotime($usuario['data_cadastro']));?>
                </td>

                <td class="ls-txt-right ls-regroup">
                <a href="<?php echo base_url() ?>usuarios/aprovar/<?php echo $usuario['id'];?>" class="ls-btn-primary ls-btn-sm ls-ico-user">Aprovar</a>

                    <a href="<?php echo base_url() ?>usuarios/visualizar/<?php echo $usuario['id'];?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                        <a href="#" class="ls-btn ls-btn-sm ls-btn-danger" aria-expanded="false" role="combobox"></a>
                        <ul class="ls-dropdown-nav" aria-hidden="true">
                           <!-- <li><a href="<?php echo base_url() ?>usuarios/editar/<?php echo $usuario['id'];?> " role="option">Editar</a></li>-->
                            <li><a href="<?php echo base_url() ?>usuarios/deletar/<?php echo $usuario['id'];?> " class="ls-color-danger" role="option">Excluir</a></li>
                        </ul>
                    </div>
                </td>


            </tr>

            <?php?>

        </tbody>
    </table>


       <?php }?>

       <?php }else{?>

        <div class="ls-alert-danger" role="alert"><strong>Vish!</strong> Nenhum resultado foi encontrado para sua pesquisa.</div>

       <?php }?>



</div>
