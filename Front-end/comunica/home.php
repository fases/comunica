<?php
/**
 * Incluindo o arquivo de cabecalho
 */
include 'inc/header.php';
?>

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-stats">Resumo</h1>

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


    <h2 class="ls-title-4">Relatório de envio</h2>

    <div class="row">
        <div class="col-md-6 col-sm-6"><p>Resumo de e-mail enviados e entregues por período.</p></div>
        <div class="col-md-6 col-sm-6"><p class="ls-float-right ls-float-none-xs">Período selecionado: <strong>15/06/2015 à 22/06/2015</strong></p></div>
    </div>

    <div class="ls-clearfix"></div>

    <div class="ls-board-box">

        <div id="sending-stats" class="row ls-box-group">
            <div class="col-sm-6 col-lg-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Enviados</h6>
                    </div>
                    <div class="ls-box-body">
                        <strong>99.999.999</strong>
                        <small>e-mails</small>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Entregas x Bounces</h6>
                    </div>
                    <div class="ls-box-body">
                        <div class="ls-half-board-data">
                            <div id="board-chart-1" class="ls-box-chart">
                            </div>
                        </div>
                        <div class="ls-half-board-data">
                            <strong class="ls-color-theme">20.000</strong>
                            <small>entregues</small>
                            <strong class="ls-color-danger">5.000</strong>
                            <small>bounces</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Abertos</h6>
                    </div>
                    <div class="ls-box-body">
                        <div class="ls-half-board-data">
                            <div id="board-chart-2" class="ls-box-chart">
                            </div>
                        </div>
                        <div class="ls-half-board-data">
                            <strong class="ls-color-info">10.000</strong>
                            <small>dos e-mails entregues</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="ls-box">
                    <div class="ls-box-head">
                        <h6 class="ls-title-4">Denúncias</h6>
                    </div>
                    <div class="ls-box-body">
                        <strong>80</strong>
                        <small>spam</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="ls-chart">

            <div class="ls-clearfix">
                <h3 class="ls-title-4 ls-float-left">Gráfico de <strong>Entregues x Bounces x Abertos</strong></h3>

                <div class="ls-float-right">
                    <div class="ls-group-btn ls-group-active ls-display-inline-block">
                        <button type="button" data-ls-module="tabs" data-target=".child1" class="ls-btn ls-active ls-ico-chart-bar-up"></button>
                        <button type="button" data-ls-module="tabs" data-target=".child2" class="ls-btn ls-ico-table-alt"></button>
                        <button type="button" class="ls-btn-primary ls-no-margin-top" data-ls-module="tabs" data-target="#infoAll">Detalhar</button>
                    </div>

                </div>
            </div>

            <div class="ls-tabs-container" id="awesome-tab-content">

                <div class="ls-tab-content child1 ls-active">
                    <div id="panel-charts-2"></div>
                </div>

                <div class="ls-tab-content child2">
                    <table class="ls-table">
                        <thead>
                            <tr>
                                <th class="ls-txt-center">Hora</th>
                                <th class="ls-txt-center">Enviados</th>
                                <th class="ls-txt-center hidden-xs">Bounces</th>
                                <th class="ls-txt-center hidden-xs">Denúncias</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ls-txt-center">00h</td>
                                <td class="ls-txt-center">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                            </tr>
                            <tr>
                                <td class="ls-txt-center">00h</td>
                                <td class="ls-txt-center">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                            </tr>
                            <tr>
                                <td class="ls-txt-center">00h</td>
                                <td class="ls-txt-center">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                            </tr>
                            <tr>
                                <td class="ls-txt-center">00h</td>
                                <td class="ls-txt-center">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                            </tr>
                            <tr>
                                <td class="ls-txt-center">00h</td>
                                <td class="ls-txt-center">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                                <td class="ls-txt-center hidden-xs">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="infoAll" class="ls-tab-content">
                    <table class="ls-table">
                        <thead>
                            <tr>
                                <th class="hidden-xs">Tipo</th>
                                <th class="hidden-xs">Data de envio</th>
                                <th>Remetente</th>
                                <th>Destinatário</th>
                                <th class="hidden-xs">Assunto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="hidden-xs ls-color-theme"><a href="#">Soft Bounce</a></td>
                                <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                                <td>darius-weiner@mac.com</td>
                                <td>neil_woods@hotmail.com</td>
                                <td class="hidden-xs">Rerum porro et omnis repellat alias earum voluptatem neque eius accusamus magnam unde</td>
                            </tr>
                            <tr>
                                <td class="hidden-xs ls-color-theme"><a href="#">Soft Bounce</a></td>
                                <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                                <td>brock_graham@fastmail.com</td>
                                <td>sadie_mckenna@email.com</td>
                                <td class="hidden-xs">Velit autem modi recusandae et ut autem impedit</td>
                            </tr>
                            <tr>
                                <td class="hidden-xs ls-color-theme"><a href="#">Soft Bounce</a></td>
                                <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                                <td>angelo_parks@mac.com</td>
                                <td>bryce_eason@aol.com</td>
                                <td class="hidden-xs">Quia quod qui est vero unde</td>
                            </tr>
                            <tr>
                                <td class="hidden-xs ls-color-theme"><a href="#">Soft Bounce</a></td>
                                <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                                <td>geraldine_stone@mail.com</td>
                                <td>mohammed-wallace@mac.com</td>
                                <td class="hidden-xs">Nemo magni vel a suscipit eius nam est aliquam adipisci et officiis enim</td>
                            </tr>
                            <tr>
                                <td class="hidden-xs ls-color-theme"><a href="#">Soft Bounce</a></td>
                                <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
                                <td>toby-may@hotmail.com</td>
                                <td>trisha_boswell@live.com</td>
                                <td class="hidden-xs">Non placeat iste ut inventore vel doloribus modi provident et</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>

    <!-- Modal de exportação -->
    <div class="ls-modal fade" id="modal_export">
        <div class="ls-modal-box">
            <div class="ls-modal-header">
                <button data-dismiss="modal">&times;</button>
                <h4 class="ls-modal-title">Exportar CSV</h4>
            </div>
            <div class="ls-modal-body">
                <form class="ls-form row">
                    <fieldset>
                        <label class="ls-label col-md-5">
                            <b class="ls-label-text">Período</b>
                            <div class="ls-custom-select">
                                <select name="">
                                    <option value="">Dia atual</option>
                                    <option value="">Última semana</option>
                                    <option value="">Últimos 30 dias</option>
                                    <option value="">Últimos 6 meses</option>
                                    <option value="">Últimos 12 meses</option>
                                    <option value="">Personalizado</option>
                                </select>
                            </div>
                        </label>
                        <div class="ls-label col-md-11">
                            <h5 class="ls-title-6">Status de Envio</h5>
                            <label class="ls-label-text">
                                <input type="radio" name="export[filter_status]">
                                Todos enviados (Entregues e Erros)
                            </label>
                            <label class="ls-label-text">
                                <input type="radio" name="export[filter_status]">
                                Apenas Entregues
                            </label>
                            <label class="ls-label-text">
                                <input type="radio" name="export[filter_status]">
                                Apenas Erros
                            </label>
                            <label class="ls-label-text">
                                <input type="checkbox" name="export[send_notification]" data-toggle-class="ls-display-none" data-target="#notification">
                                Receber notificação por e-mail quando o arquivo estiver disponível
                            </label>
                        </div>
                        <div id="notification" class="ls-display-none ls-label col-md-12">
                            <input id="export_email" name="export[email]" placeholder="Preencha com o seu e-mail" type="text" value="testeqa@teste.com.br">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="ls-modal-footer">
                <a class="ls-btn float-right ls-float-right" data-dismiss="modal">Cancelar</a>
                <a class="ls-btn-primary">Exportar</a>
            </div>
        </div>
    </div>

    <!-- Modal de exportação realizadas -->
    <div class="ls-modal fade" id="modal_exported_reports">
        <div class="ls-modal-box">
            <div class="ls-modal-header">
                <button data-dismiss="modal">&times;</button>
                <h4 class="ls-modal-title">Relatórios Exportados</h4>
            </div>
            <div class="ls-modal-body">
                <p>Os arquivos ficarão disponíveis por 7 dias após a data de criação.</p>
                <table class="ls-table">
                    <thead>
                        <tr>
                            <th>Nome do arquivo</th>
                            <th class="ls-width-100"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">Relatorios_Enviados_02-07-2013_01-07-2014.csv</a>
                                <p><strong>Data de criação: </strong>02/07/2013 - 14:30</p>
                            </td>
                            <td>
                                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right ls-float-right">
                                    <a href="#" class="ls-btn-sm"></a>
                                    <ul class="ls-dropdown-nav">
                                        <li><a href="#" >Baixar arquivo</a></li>
                                        <li><a href="#" class="ls-color-danger">Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Relatorios_Enviados_02-07-2013_01-07-2014.csv</a>
                                <p><strong>Data de criação: </strong>02/07/2013 - 14:30</p>
                            </td>
                            <td>
                                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right ls-float-right">
                                    <a href="#" class="ls-btn-sm"></a>
                                    <ul class="ls-dropdown-nav">
                                        <li><a href="#" >Baixar arquivo</a></li>
                                        <li><a href="#" class="ls-color-danger">Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Relatorios_Enviados_02-07-2013_01-07-2014.csv</a>
                                <p><strong>Data de criação: </strong>02/07/2013 - 14:30</p>
                            </td>
                            <td>
                                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right ls-float-right">
                                    <a href="#" class="ls-btn-sm"></a>
                                    <ul class="ls-dropdown-nav">
                                        <li><a href="#" >Baixar arquivo</a></li>
                                        <li><a href="#" class="ls-color-danger">Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Relatorios_Enviados_02-07-2013_01-07-2014.csv</a>
                                <p><strong>Data de criação: </strong>02/07/2013 - 14:30</p>
                            </td>
                            <td>
                                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right ls-float-right">
                                    <a href="#" class="ls-btn-sm"></a>
                                    <ul class="ls-dropdown-nav">
                                        <li><a href="#" >Baixar arquivo</a></li>
                                        <li><a href="#" class="ls-color-danger">Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Relatorios_Enviados_02-07-2013_01-07-2014.csv</a>
                                <p><strong>Data de criação: </strong>02/07/2013 - 14:30</p>
                            </td>
                            <td>
                                <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right ls-float-right">
                                    <a href="#" class="ls-btn-sm"></a>
                                    <ul class="ls-dropdown-nav">
                                        <li><a href="#" >Baixar arquivo</a></li>
                                        <li><a href="#" class="ls-color-danger">Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<?php
/**
 * Incluindo o arquivo de rodape
 */
include 'inc/footer.php';
