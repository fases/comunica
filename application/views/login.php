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

        <style>
.ls-login-logo {
    background-color: #25b89a;
    font-family: ff-dax-web-pro,"Helvetica Neue",sans-serif;
    overflow: hidden;
    position: relative;
    white-space: nowrap;
    padding: 20px;

}

.ls-login-parent .ls-login-logo {
    color: #fff;
}

</style>

    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

        <div class="ls-login-parent">

            <div class="ls-login-inner">

                <div class="ls-login-container">

                    <div class="ls-login-box">
                                            <header>
                        </header>
                        
                        <h1 class="ls-login-logo">
<!--                            <img title="Logo login" src="../../../assets/images/locastyle/logo-locaweb.jpg" />-->
                            COMUNICA
                        </h1>

                        <?php 
                        if($usuario_invalido):
                            ?>

                        <div class="ls-alert-danger"><strong>Vish!</strong> Algo muito ruim aconteceu, seu login não deu certo. </div>

                        <?php 
                    endif; 
                            ?>

                        <form method="post" class="ls-form ls-login-form">
                            <fieldset>

                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                                    <input class="ls-login-bg-user ls-field-lg" type="text" placeholder="E-mail" name="email" required autofocus>
                                </label>

                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Senha</b>
                                    <div class="ls-prefix-group">
                                        <input id="password_field" class="ls-login-bg-password ls-field-lg" type="password" placeholder="Senha" name="senha" required>
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                                    </div>
                                </label>

                                <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p>

                                <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">
                                <p class="ls-txt-center ls-login-signup">
                                    Não possui uma conta no Comuinca? 
                                </p>



                            </fieldset>
                        </form>

                        <button data-ls-module="modal" data-action="http://locaweb.com.br/" data-content="<h2>Preencha os campos abaixo para se cadastrar!
</h2><p>Conteúdo feito dentro do data-content</p>" data-class="ls-btn-danger" data-save="Cadastrar" data-close="Fechar" class="ls-btn-danger ls-ico-user ls-btn-block ls-btn-lg"> Cadastre-se agora </button>

                </div>
            </div>
        </div>




        <script src="<?= base_url() ?>www/js/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>www/js/locastyle.js" type="text/javascript"></script>

    </body>
</html>
