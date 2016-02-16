<!DOCTYPE html>
<!--
Página de login
-->

<html class="ls-theme-gray">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Comunica - Login</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="<?php echo base_url() ?>www/css/locastyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">



<div class="ls-topbar">



 </div>

<div class="doc-section container">
 

  <hr>
  

</div>


<main class="ls-main">
    <div class="container-fluid">


        <form action="/locawebstyle/documentacao/exemplos/painel1/client" class="ls-form">
        <legend class="ls-title-2">Cadastre-se!</legend>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Nome</span>
                <input type="text" name="name">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Email</span>
                <input type="text" name="email">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-3">
                <span class="ls-label-text">Senha</span>
                <input type="password" name="password">
            </label>
            <label class="ls-label col-md-3">
                <span class="ls-label-text">Confirmação de senha</span>
                <input type="password" name="password-confirmation">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Informação</span>
                <textarea rows="4"></textarea>
                <p class="ls-helper-text">Preencha informações adicionais do usuário. Ex.: Dados de contato, endereço, etc.</p>
            </label>
        </div>

        <hr>
        <button type="submit" class="ls-btn-primary" aria-expanded="false">Salvar</button>
        <a href="<?php echo base_url() ?>login" class="ls-btn" aria-expanded="false">Cancelar</a>
    </form>






    </div>

  </main>

        <script src="<?= base_url() ?>www/js/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>www/js/locastyle.js" type="text/javascript"></script>

    </body>
</html>
