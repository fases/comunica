
<!-- Componentes na página -->

<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-camera">Agendar empréstimo de material</h1>

  <!-- Apartir daqui, vocês devem inserir os componentes na página -->

  <div class="ls-clearfix"></div>

   <?php $this->mensagem_model->exibir(); ?>

  <form method="post" class="ls-form ls-form-horizontal" data-ls-module="form">
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Data do empréstimo</b>
        <input type="text" name="data" class="datepicker"  placeholder="dd/mm/aaaa" required>
      </label>

      <label class="ls-label col-md-3">
        <b class="ls-label-text">Horário</b>
        <input type="text" name="hora" class="ls-mask-time" placeholder="00:00" required>
      </label>

      <label class="ls-label col-md-3">
        <b class="ls-label-text">Data da devolução</b>
        <input type="text" name="data_devolucao" class="datepicker"  placeholder="dd/mm/aaaa" required>
      </label>

      <label class="ls-label col-md-3">
        <b class="ls-label-text">Horário</b>
        <input type="text" name="hora_devolucao" class="ls-mask-time" placeholder="00:00" required>
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


            <?php }?>
          </select>
        </div>

      </label>

      <label class="ls-label col-md-12 col-sm-4">
        <b class="ls-label-text">Material</b>
        <div class="ls-custom-select">
          <select name="id_material" id="id_material" class="ls-select">

            <option value="0"></option>
            <?php 
            foreach ($materiais as $material) {
              ?>

              <option value="<?= $material->id?>"><?= $material->nome; ?></option>

            <?php }?>
          </select>
        </div>

      </label>



            <!--    <label class="ls-label col-md-2 col-sm-5">
      <b class="ls-label-text">Quantidade</b>
      <div class="ls-custom-select">
        <select name="quantidade" id="select_period" class="ls-select">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
      </div>
    </label>-->

           <!-- <label class="ls-label col-md-3">
                   <a href="#1" class="ls-btn-primary">Verificar disponibilidade</a>
                 </label> -->

                 <label class="ls-label col-md-12">
                  <b class="ls-label-text">Justificativa</b>
                  <textarea rows="10" name="justificativa"  class="ls-textarea-autoresize" ></textarea>
                </label>

                <label class="ls-label col-md-12">
                  <b class="ls-label-text">Observações</b>
                  <textarea rows="3" name="obs" class="ls-textarea-autoresize "></textarea>
                </label>
              </fieldset>

              <hr>

              <fieldset>
                <!-- Termos de uso -->
                <div class="ls-label col-md-12">
                  <label class="ls-label-text">
                    <input type="checkbox" name="termos" value="1" >
                    Estou ciente do <a href="#">da política  de empréstimos</a> de materiais do Setor de Comunicação Social do Campus. <a href="#"> Caso não conheça, clique aqui. </a>
                  </label>
                </div>
              </fieldset>

              <div class="ls-actions-btn">
                <button class="ls-btn">Enviar</button>
                <button class="ls-btn-danger">Cancelar</button>
              </div>


            </form>

          </div>
