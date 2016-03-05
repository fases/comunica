<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Impressão de arquivos</h1>

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
            
            
            
            <tr>
                <td>
                    <a href="http://localhost/comunica/usuarios/visualizar.php">João da Silva</a>
                    <span class="ls-tag hidden-xs">Não recorrente</span>
                </td>
                <td>
                    joao.silva@ifrn.edu.br
                </td>
                <td class="ls-txt-center hidden-xs">Ativo</td>
                <td class="ls-txt-right ls-regroup">
                    <a href="http://localhost/comunica/usuarios/visualizar.php" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                        <a href="#" class="ls-btn ls-btn-sm" aria-expanded="false" role="combobox"></a>
                        <ul class="ls-dropdown-nav" aria-hidden="true">
                            <li><a href="#" role="option">Editar</a></li>
                            <li><a href="#" class="ls-color-danger" role="option">Excluir</a></li>
                        </ul>
                    </div>

                </td>
            </tr>

        </tbody>
    </table>

</div>
