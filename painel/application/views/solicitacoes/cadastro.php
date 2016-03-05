<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Solicitações de Cadastros</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

        <!-- COISINHA DE FILTRAR -->

        <div class="ls-box-filter">

        <form action="" class="ls-form ls-form-inline">

            <input type="hidden" name="status" value="">

            <label class="ls-label col-lg-3 col-md-6 col-sm-12">
                <b class="ls-label-text">Período</b>
                <div class="ls-custom-select">
                    <select name="period" id="select_period" class="ls-select">
                        <option>Hoje</option>
                        <option>Ontem</option>
                        <option>Última semana</option>
                        <option>Últimos 30 dias</option>
                        <option>Últimos 6 meses</option>
                        <option>Últimos 12 meses</option>
                        <option>Personalizado</option>
                    </select>
                </div>
            </label>

            <label class="ls-label col-lg-2 col-md-3 col-sm-12">
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_2" data-ls-module="popover" data-content="Escolha o período desejado e clique em 'Filtrar'."></span>
                    <input type="text" name="range_start" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" id="datepicker1" data-ls-daterange="#datepicker2">
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker1" href="#"></a>
                </div>
            </label>

            <label class="ls-label col-lg-2 col-md-3 col-sm-12">
                <div class="ls-prefix-group">
                    <span id="new_feature_custom_filter_3" data-ls-module="popover" data-content="Clique em 'Filtrar' para exibir  o período selecionado."></span>
                    <input type="text" name="range_end" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" id="datepicker2">
                    <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker2" href="#"></a>
                </div>
            </label>

            <input type="submit" class="ls-btn-primary" value="Filtrar"/>

            <div data-ls-module="dropdown" class="ls-dropdown ls-float-right ls-float-none-sm ls-float-none-md" id="step4">
                <a href="#" class="ls-btn" role="combobox" aria-expanded="false">Exportar</a>
                <ul class="ls-dropdown-nav" aria-hidden="true">
                    <li><a href="" role="option" tabindex="-1">CSV</a></li>
                    <li><a data-action="open_modal_export" data-ls-module="modal" data-report-ext="XLS" data-target="#modal_export" href="" role="option" tabindex="-1">XLS</a></li>
                    <li><a class="ls-divider" data-action="open_modal_export" data-ls-module="modal" data-target="#modal_exported_reports" data-url="/panel/exports" href="" id="link_exported_reports" role="option" tabindex="-1">Relatórios exportados</a></li>
                </ul>
            </div>

        </form>

    </div>

    <!-- Lista dos pedidos-->

    <table class="ls-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th class="ls-txt-center hidden-xs">Status</th>
                <th></th>
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
                   echo "Indeferido";

                }else {
                     echo "Indeferido";
                } ?>

                </td>

                <td class="ls-txt-right ls-regroup">
                <a href="<?php echo base_url() ?>usuarios/aprovar/<?php echo $usuario['id'];?>" class="ls-btn-primary ls-btn-sm ls-ico-user">Aprovar usuário</a>

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

            <?php }?>

        </tbody>
    </table>

</div>