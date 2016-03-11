
<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Dados sobre: <?php echo $usuario_editar->nome ?></h1>

       <?php $this->mensagem_model->exibir(); ?>

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
                    <li><a href="#" class="ls-color-danger" role="option">Desativar</a></li>
                </ul>
            </div>
        </div>

        <form method="post" class="ls-form row" data-ls-module="form">
            <fieldset id="domain-form" class="ls-form-disable ls-form-text">
                <label class="ls-label col-md-12 col-lg-10">
                    <b class="ls-label-text">Matricula</b>
                    <input type="text" name="matricula" value="<?php echo $usuario_editar->matricula ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-12 col-lg-12">
                    <b class="ls-label-text">Nome</b>
                    <input type="text" name="nome" value="<?php echo $usuario_editar->nome ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-12 col-lg-12">
                    <b class="ls-label-text">E-mail:</b>
                    <input type="text" name="email" value="<?php echo $usuario_editar->email ?>" required="" disabled="disabled" class="ls-form-text">
                </label>
                <label class="ls-label col-md-12 col-lg-12">
                  <b class="ls-label-text">Status</b>
                  <div class="ls-custom-select">
                    <select class="ls-custom" name="status">

                        <?php if ($usuario_editar->status==0) {
                          echo '<option selected="selected" value="0">Inativo</option>';
                          echo '<option value="1">Ativo</option>';

                      }elseif ($usuario_editar->status==1) {
                          echo '-<option selected="selected" value="1">Ativo</option>';
                          echo '<option value="0">Inativo</option>';
                      } ?>


                  </select>
              </div>
          </label>
                <!--<label class="ls-label col-md-6 col-lg-8 ls-label-disable">
                    <b class="ls-label-text">Data de cadastro:</b>
                    <input type="text" value="<?php echo $data_cadastro ?>" required="" disabled="disabled" class="ls-form-text ls-label-disable">
                </label>
                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Endereço:</b>
                    <textarea name="endereco" id="endereco" cols="30" rows="5" disabled="disabled" class="ls-form-text"><?php echo $usuario_editar->endereco ?></textarea>
                </label>

                <label class="ls-label col-md-6 col-lg-8">
                    <b class="ls-label-text">Telefone:</b>
                    <textarea name="telefone" id="telefone" class="ls-mask-phone9_with_ddd" cols="30" rows="5" disabled="disabled" class="ls-form-text"><?php echo $usuario_editar->telefone ?></textarea>
                </label> -->
            </fieldset>
            <div class="domain-actions ls-display-none">
                <button type="submit" class="ls-btn-primary" aria-expanded="false">Salvar</button>
                <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" aria-expanded="false">Cancelar</button>
            </div>
        </form>
    </div>



  <!--  <div class="ls-box ls-board-box">

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
    </div> -->


    <!-- Modal de senha -->
    <div class="ls-modal" id="editPassword">
        <form method="post" action="<?php echo base_url() ?>usuarios/alterar_senha" class="ls-form">
            <div class="ls-modal-box">
                <input type="hidden" name="id" value="<?php echo $usuario_editar->id ?>">
                <div class="ls-modal-header">
                    <button data-dismiss="modal">×</button>
                    <h4 class="ls-modal-title">Alterar senha</h4>
                </div>
                <div class="ls-modal-body">

                    <label class="ls-label">
                        <b class="ls-label-text">Senha *</b>
                        <input type="password" name="senha" required>
                    </label>
                    <label class="ls-label">
                        <b class="ls-label-text">Confirmação de senha *</b>
                        <input type="password" name="confirma_senha" required>
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
