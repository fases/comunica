<?php
/**
 * Esse código foi feito para configurar a url de forma absoluta
 * Ex: http://localhost/comunica/
 */
$server = $_SERVER['SERVER_NAME']; // localhost
$root = "http://$server/comunica/"; // http://localhost/comunica/

/**
 * Aqui definimos uma constante que poderá ser utilizada em qualquer
 * arquivo que inclua o arquivo 'header.php'
 * 
 * Abaixo vc podera ver um exemplo funcional
 */
define("ROOT", $root);

?>

<!DOCTYPE html>
<html class="ls-theme-light-green  ">
    <head>
        <title>Resumo</title>

        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel2.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel2.png">
        <meta name="apple-mobile-web-app-title" content="Painel 2">
        <script src="<?= ROOT ?>locaweb/javascripts/libs/mediaqueries-ie.js" type="text/javascript"></script>
        <script src="<?= ROOT ?>locaweb/javascripts/libs/html5shiv.js" type="text/javascript"></script>

        <link href="<?= ROOT ?>locaweb/stylesheets/locastyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_painel2 documentacao_exemplos_painel2_resume documentacao_exemplos_painel2_resume_index">

        <div class="ls-topbar ">

            <!-- Barra de Notificações -->
            <div class="ls-notification-topbar">

                <!-- Links de apoio -->
                <div class="ls-alerts-list">
                    <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain">
                        <span>Notificações</span>
                    </a>
                    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain">
                        <span>Ajuda</span>
                    </a>
                    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain">
                        <span>Sugestões</span>
                    </a>
                </div>

                <!-- Dropdown com detalhes da conta de usuário -->
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="<?= ROOT ?>locaweb/images/avatar-example.jpg" alt="" />
                        <span class="ls-name">Jadson Comunica</span>
                    </a>

                    <nav class="ls-dropdown-nav ls-user-menu">
                        <ul>
                            <li><a href="#">Meus dados</a></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <span class="ls-show-sidebar ls-ico-menu"></span>

            <a href="/locawebstyle/documentacao/exemplos/painel2/pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

            <!-- Nome do produto/marca com sidebar -->
            <h1 class="ls-brand-name">
                <a href="home" class="ls-ico-earth">
                    <small>Controle da Comunicação</small>
                    Comunica
                </a>
            </h1>

            <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
        </div>


        <aside class="ls-sidebar">

            <div class="ls-sidebar-inner">
                <a href="/locawebstyle/documentacao/exemplos/painel2/pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>
                <nav class="ls-menu">
                    <ul>
                        <li><a href="<?= ROOT ?>home.php" class="ls-ico-dashboard">Principal</a></li>
                        <li>
                            <a href="#" class="ls-ico-stats">Pedidos</a>
                            <ul>
                                <li><a href="/pedido/meus-pedidos">Meus Pedidos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Eventos</a>
                            <ul>
                                <li>
                                    <a href="/evento/cobertura-de-eventos">Cobertura</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Notícias</a>
                            <ul>
                                <li>
                                    <a href="/noticia/enviar-noticias">Envio de Notícias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Impressão</a>
                            <ul>
                                <li><a href="/producao/material-grafico">Produção de Material Gráfico</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Usuários</a>
                            <ul>
                                <li><a href="<?= ROOT ?>usuarios/add.php">Cadastro</a></li>
                                <li><a href="<?= ROOT ?>usuarios/listar.php">Listar</a></li>
                                <li><a href="/usuario/solitacao">Solitações</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </aside>



        <main class="ls-main ">