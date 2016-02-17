<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Cadastrar material</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

    <form method="post" class="ls-form ls-form-horizontal">
  <fieldset>
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" placeholder="Nome do material" class="ls-field" required>
    </label>
        <label class="ls-label col-md-3">
      <b class="ls-label-text">Nº do Patrimônio</b>
      <input type="text" name="patrimonio" placeholder="Patrimônio" class="ls-field" required>
    </label>

          <label class="ls-label col-md-3">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="situacao">
          <option selected="selected" value="1">Funcional</option>
          <option value="0">Defeituoso</option>
        </select>
      </div>
    </label>

  <label class="ls-label col-md-12">
    <b class="ls-label-text">Especificações</b>
    <textarea rows="7" class="ls-textarea-resize-vertical" name="especificacao"></textarea>
  </label>

  </fieldset>


          <div class="ls-actions-btn">
        <button type="submit" class="ls-btn-primary" aria-expanded="false">Enviar</button>
        <button type="reset" class="ls-btn-danger">Cancelar</button>
      </div>

</form>
</div>

