<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-camera">Cobertura de eventos</h1>

    <!-- Apartir daqui, vocês devem inserir os componentes na página -->


    <div class="ls-clearfix"></div>

    <?php $this->mensagem_model->exibir(); ?>

    <form method="post" class="ls-form ls-form-horizontal" data-ls-module="form">
    <fieldset>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Data</b>
    <input type="text" id="data" name="data" class="datepicker"  placeholder="dd/mm/aaaa"required>
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
          <b class="ls-label-text">Local de uso</b>
          <div class="ls-custom-select">
            <select name="id_local" id="id_local" class="ls-select">

              <option value="0"></option>
              <?php 
              foreach ($locais as $local) {
                ?>

                <option value="<?= $local->id?>"><?= $local->nome; ?></option>
           <!-- <option>Refletor</option>
            <option>Câmera</option>
            <option>Tecidos</option>
            <option>Toalha de mesa</option>
            <option>Arranjo de flores</option>
            <option>Microfone</option> -->,

            <?php }?>
          </select>
        </div>
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
