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
                        if($usuario_valido):
                            ?>

<div class="ls-alert-success ls-dismissable">
  <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                       <span class="ls-ico-checkmark"></span><strong>Bazinga!</strong>  Você conseguiu, seu cadastro foi realizado, mas ficará pendente até que o Administrador o aprove, em caso de dúvidas, consulte seu e-mail. </div>



                        <?php 
                    endif; 
                            ?>

                        <?php 
                        if($usuario_invalido):
                            ?>

                        <div class="ls-alert-danger"><span class="ls-ico-close"></span><strong>Vish!</strong> Seu login não deu certo. </div>

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
                                    Não possui uma conta no Comunica? 
                                </p>



                            </fieldset>
                        </form>

                        <a href="#" data-ls-module="modal" data-target="#cadastrar"  class="ls-btn ls-ico-user ls-btn-block">Cadastre-se agora!</a>

                        <!-- <button data-ls-module="modal" data-action="http://locaweb.com.br/" data-content="<h2>Preencha os campos abaixo para se cadastrar!
</h2><p>Conteúdo feito dentro do data-content</p>" data-class="ls-btn-danger" data-save="Cadastrar" data-close="Fechar" class="ls-btn-danger ls-ico-user ls-btn-block ls-btn-lg"> Cadastre-se agora </button>-->

<!-- Modal de senha -->
    <div class="ls-modal" id="cadastrar">
        <form method="post" action="<?php echo base_url() ?>login/cadastrar" class="ls-form">
            <div class="ls-modal-box">
                <div class="ls-modal-header">
                    <button data-dismiss="modal">×</button>
                    <h2 class="ls-ico-user-add">Cadastre-se!</h2>
                </div>
                <div class="ls-modal-body">

                    <label class="ls-label">
                        <b class="ls-label-text">Matrícula Institucional*</b>
                        <input type="text" maxlength=14 name="matricula" required>
                    </label>
                    <label class="ls-label">
                        <b class="ls-label-text">Nome*</b>
                        <input type="text" name="nome" required>
                    </label>
                    <label class="ls-label">
                        <b class="ls-label-text">E-mail*</b>
                        <input type="text" name="email" required>
                    </label>

                    <label class="ls-label">
                        <b class="ls-label-text">Senha*</b>
                        <input type="password" maxlength="20" name="senha" required>
                    </label>
                    <label class="ls-label">
                        <b class="ls-label-text">Confirmação de senha*</b>
                        <input type="password" maxlength="20" name="confirma_senha" required>
                    </label>
                </div>
                <div class="ls-modal-footer">
                    <button type="submit" class="ls-btn-primary ls-btn-lg" aria-expanded="false">Efetuar cadastro</button>
                    <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal" aria-expanded="false">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

                </div>
            </div>
        </div>

            




        <script src="<?= base_url() ?>www/js/libs/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>www/js/locastyle.js" type="text/javascript"></script>

    </body>
</html>
