<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-folder ">Cadastrar material</h1>

        <!-- Apartir daqui, vocês devem inserir os componentes na página -->

    <form action="" class="ls-form ls-form-horizontal" >
  <fieldset>
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" placeholder="Nome do material" class="ls-field" required>
    </label>
        <label class="ls-label col-md-3">
      <b class="ls-label-text">Nº do Patrimônio</b>
      <input type="text" name="nome" placeholder="Patrimônio" class="ls-field" required>
    </label>

          <label class="ls-label col-md-3">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="">
          <option selected="selected">Defeituoso</option>
          <option value="#">Opção 2</option>
        </select>
      </div>
    </label>

  <label class="ls-label col-md-12">
    <b class="ls-label-text">Especificações</b>
    <textarea rows="7" class="ls-textarea-resize-vertical"></textarea>
  </label>

  </fieldset>

        <div class="ls-actions-btn">
        <button class="ls-btn">Cadastrar</button>
        <button class="ls-btn-danger">Cancelar</button>
      </div>

</form>
</div>

