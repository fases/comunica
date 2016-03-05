<!DOCTYPE html>
<html class="ls-theme-light-green  ">
    <head>
        <title>COMUNICA</title>

        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="icon" sizes="192x192" href="<?php echo base_url() ?>www/images/ico-painel2.png">
        <link rel="apple-touch-icon" href="<?php echo base_url() ?>www/images/ico-painel2.png">
        <meta name="apple-mobile-web-app-title" content="Painel 2">
        <script src="<?php echo base_url() ?>www/js/libs/mediaqueries-ie.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>www/js/libs/html5shiv.js" type="text/javascript"></script>

        <link href="<?php echo base_url() ?>www/css/locastyle.css" rel="stylesheet" type="text/css" />

        <!-- Usando o CSS do servidor 
        <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/3.8.2/stylesheets/locastyle.css">-->
        
    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_painel2 documentacao_exemplos_painel2_resume documentacao_exemplos_painel2_resume_index">

        <div class="ls-topbar ">

            <!-- Barra de Notificações -->
            <div class="ls-notification-topbar">

                <!-- Links de apoio -->
                <div class="ls-alerts-list">
                    <!--<a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain">
                        <span>Notificações</span>
                    </a>
                    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain">
                        <span>Ajuda</span>
                    </a> -->
                    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain">
                        <span>Sugestões</span>
                    </a>
                </div>

                <!-- Dropdown com detalhes da conta de usuário -->
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="<?php echo base_url() ?>www/images/avatar-example.jpg" alt="" />
                        <span class="ls-name"><?php $nomes = explode(' ', $usuario->nome); echo $nomes[0]; ?></span>
                    </a>

                    <nav class="ls-dropdown-nav ls-user-menu">
                        <ul>
                            <li><a href="<?php echo base_url().'perfil' ?>">Meus dados</a></li>
                            <li><a href="<?php echo base_url() ?>logout">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <span class="ls-show-sidebar ls-ico-menu"></span>

            <a onClick="JavaScript: window.history.back();"  class="ls-go-next"><span class="ls-text">Voltar</span></a>

            <!-- Nome do produto/marca com sidebar -->
            <h1 class="ls-brand-name">
                <a href="<?php echo base_url() ?>" class="ls-ico-earth">
                    <small>Sistema Online da Comunicação Social</small>
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
                        <li><a href="<?php echo base_url() ?>" class="ls-ico-dashboard">Início</a></li>
                        <!-- <li>
                            <a href="#" class="ls-ico-stats">Pedidos</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>pedidos">Meus Pedidos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-table-alt">Empréstimos</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>emprestimos/agendar" >Agendar empréstimo de material</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-bullhorn" title="Eventos">Eventos</a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url() ?>eventos/cobertura">Cobertura</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-edit-admin" title="Configurações">Notícias</a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url() ?>noticias/enviar">Envio de Notícias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="ls-ico-book" title="Configurações">Material gráfico</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>material/producao">Produção de Material Gráfico</a></li>
                                <li><a href="<?php echo base_url() ?>material/impressao">Impressão de Material Gráfico</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#" class="ls-ico-user" title="Configurações">Usuários</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>usuarios/cadastrar">Cadastro</a></li>
                                <li><a href="<?php echo base_url() ?>usuarios/listar">Listar</a></li>
                                <!--<li><a href="<?php echo base_url() ?>usuarios/solicitacoes">Solitações</a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="ls-ico-folder" title="Solicitações">Solicitações</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>solicitacoes/cadastro">Cadastro</a></li>
                                <li><a href="<?php echo base_url() ?>solicitacoes/material">Material gráfico</a></li>
                                <li><a href="<?php echo base_url() ?>solicitacoes/cobertura">Cobetura de eventos</a></li>
                                <li><a href="<?php echo base_url() ?>solicitacoes/noticias">Notícias</a></li>
                                <!-- <li><a href="<?php echo base_url() ?>solicitacoes/impressao">Impressão de arquivos</a></li> -->
                                <li><a href="<?php echo base_url() ?>solicitacoes/emprestimos">Empréstimos</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="ls-ico-book" title="Material">Material</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>material/cadastrar">Cadastrar material</a></li>
                                <li><a href="<?php echo base_url() ?>material/consultar">Consultar</a></li>
                                <li><a href="<?php echo base_url() ?>local/cadastrar">Locais</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="ls-ico-envelope" title="Contato">Contato</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>contato">Enviar</a></li>
                                <li><a href="<?php echo base_url() ?>contato/listar">Visualizar</a></li>
                            </ul>
                        </li

                    </ul>
                </nav>
            </div>

        </aside>



        <main class="ls-main ">