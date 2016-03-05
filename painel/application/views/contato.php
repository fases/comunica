<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-envelope ">Contato</h1>

       <?php $this->mensagem_model->exibir(); ?>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

        <form method="post" class="ls-form row">
  <fieldset>
    <label class="ls-label col-md-12">
      <b class="ls-label-text">Assunto</b>
      <input type="text" name="assunto" placeholder="Digite o motivo do seu contato" required >
    </label>

                 <label class="ls-label col-md-12">
          <b class="ls-label-text">Mensagem</b>
          <textarea rows="8" name="mensagem"  class="ls-textarea-autoresize" required></textarea>
        </label>

    </fieldset>

      <div class="ls-actions-btn">
        <button class="ls-btn-primary">Enviar</button>
        <button class="ls-btn-danger">Cancelar</button>
      </div>
    </form>


    </div>
</div>

<!-- Componentes na página -->
