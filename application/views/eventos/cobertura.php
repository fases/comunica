<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-camera">Cobertura de eventos</h1>

    <!-- Apartir daqui, vocês devem inserir os componentes na página -->


    <div class="ls-clearfix"></div>

    <form method="post" class="ls-form ls-form-horizontal">
    <fieldset>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Data</b>
    <input type="text" name="data" class="datepicker"  placeholder="dd/mm/aaaa"required>
  </label>

    <label class="ls-label col-md-3">
    <b class="ls-label-text">Horário</b>
    <input type="text" name="hora" class="ls-mask-time" placeholder="00:00" required>
    </label>

      <label class="ls-label col-md-6">
      <b class="ls-label-text">Responsável</b>
      <input type="text" name="responsavel" placeholder="Servidor responsável" class="ls-field" required>
    </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Local</b>
          <input type="text"  name="local" placeholder="Local do evento" required >
        </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Descrição</b>
          <textarea rows="10" name="descricao"  class="ls-textarea-autoresize" required></textarea>
        </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Observações</b>
          <textarea rows="3" name="obs" class="ls-textarea-autoresize "></textarea>
        </label>
        </fieldset>


      <div class="ls-actions-btn">
        <button class="ls-btn">Enviar</button>
        <button class="ls-btn-danger">Cancelar</button>
      </div>


</form>

</div>
