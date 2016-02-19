
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Dados sobre: <?php echo $nome ?></h1>

    <div class="ls-box">
        <div class="ls-float-right ls-regroup">
            <a href="<?php echo base_url() ?>usuarios/listar" class="ls-btn-primary" aria-expanded="false">Voltar a listagem</a>
            <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                <a href="#" class="ls-btn" aria-expanded="false" role="combobox"></a>
                <ul class="ls-dropdown-nav" aria-hidden="true">
                    <li>
                        <a href="" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions" role="option">Editar</a>
                    </li>
                    <li><a href="#" data-ls-module="modal" data-target="#editPassword" role="option">Alterar senha</a></li>
                    <li><a href="#" role="option">Desativar</a></li>
                </ul>
            </div>
        </div>

        <form action="" class="ls-form row" data-ls-module="form">
            <fieldset id="domain-form" class="ls-form-disable ls-form-text">
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Nome</b>
                    <input type="text" value="<?php echo $nome ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">login/E-mail:</b>
                    <input type="text" value="<?php echo $email ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Status:</b>
                    <input type="text" value="<?php echo $status ?>"required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Data de cadastro:</b>
                    <input type="text" value="<?php echo $data_cadastro ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Endereço:</b>
                    <textarea name="" id="" cols="30" rows="5" disabled="disabled" class="ls-form-text"><?php echo $endereco ?></textarea>
                </label>
            </fieldset>
            <div class="domain-actions ls-display-none">
                <button type="submit" class="ls-btn-primary" aria-expanded="false">Salvar</button>
                <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" aria-expanded="false">Cancelar</button>
            </div>
        </form>
    </div>



    <div class="ls-box ls-board-box">

        <header class="ls-info-header">
            <h2 class="ls-title-3 col-md-6 ls-ico-calendar-check">
                Histórico
            </h2>
        </header>


        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="ls-box">
                    <strong class="ls-board-info">100</strong>
                    <small>Solicitações de material</small>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de senha -->
    <div class="ls-modal" id="editPassword">
        <form action="#change-password" class="ls-form">
            <div class="ls-modal-box">
                <div class="ls-modal-header">
                    <button data-dismiss="modal">×</button>
                    <h4 class="ls-modal-title">Alterar senha</h4>
                </div>
                <div class="ls-modal-body">

                    <label class="ls-label">
                        <b class="ls-label-text">Senha *</b>
                        <input type="password" required="">
                    </label>
                    <label class="ls-label">
                        <b class="ls-label-text">Confirmação de senha *</b>
                        <input type="password" required="">
                    </label>
                </div>
                <div class="ls-modal-footer">
                    <button type="submit" class="ls-btn-primary" aria-expanded="false">Salvar</button>
                    <a href="#atualizar-senha" class="ls-btn ls-float-right" data-dismiss="modal" aria-expanded="false">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

</div>
