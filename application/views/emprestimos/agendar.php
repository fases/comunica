
<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-camera">Agendar emprestimo de material</h1>

    <!-- Apartir daqui, vocês devem inserir os componentes na página -->

    <div class="ls-clearfix"></div>

    <form action="" class="ls-form ls-form-horizontal" data-ls-module="form">
    <fieldset>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Data do empréstimo</b>
    <input type="text" name="data-emprestimo" class="datepicker"  placeholder="dd/mm/aaaa"required>
  </label>

    <label class="ls-label col-md-3">
    <b class="ls-label-text">Horário</b>
    <input type="text" name="horario-emprestimo" class="ls-mask-time" placeholder="00:00:00" required>
    </label>

    <label class="ls-label col-md-3">
    <b class="ls-label-text">Data da devolução</b>
    <input type="text" name="data-devolucao" class="datepicker"  placeholder="dd/mm/aaaa"required>
  </label>

      <label class="ls-label col-md-3">
    <b class="ls-label-text">Horário</b>
    <input type="text" name="horario-devolucao" class="ls-mask-time" placeholder="00:00:00" required>
    </label>



        <label class="ls-label col-md-12">
          <b class="ls-label-text">Local de uso do material</b>
          <input type="text"  name="lolca-evento" placeholder="Local do evento" required >
        </label>

            <label class="ls-label col-md-7 col-sm-4">
      <b class="ls-label-text">Material</b>
      <div class="ls-custom-select">
        <select name="material" id="material" class="ls-select">

        <? echo $materiais; ?>

           <!-- <option>Refletor</option>
            <option>Câmera</option>
            <option>Tecidos</option>
            <option>Toalha de mesa</option>
            <option>Arranjo de flores</option>
            <option>Microfone</option> -->
        </select>
      </div>

    </label>



                <label class="ls-label col-md-2 col-sm-5">
      <b class="ls-label-text">Quantidade</b>
      <div class="ls-custom-select">
        <select name="quantidade" id="select_period" class="ls-select">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
      </div>
    </label>

            <label class="ls-label col-md-3">
                   <a href="#1" class="ls-btn-primary">Verificar disponibilidade</a>
        </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Justificativa</b>
          <textarea rows="10" name="descricao-evento"  class="ls-textarea-autoresize" required></textarea>
        </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Observações</b>
          <textarea rows="3" name="observacao-evento" class="ls-textarea-autoresize "></textarea>
        </label>
        </fieldset>

        <hr>

 <fieldset>
    <!-- Exemplo com Checkbox -->
    <div class="ls-label col-md-12">
      <label class="ls-label-text">
        <input type="checkbox" name="aceito" value="1" required>
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
