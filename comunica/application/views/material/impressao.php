<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-text2">Impressão de material gráfico </h1>

    <div class="ls-clearfix"></div>

        <form action=""  class="ls-form ls-form-horizontal">

        <fieldset>
    <div class="ls-label col-md-12">
      <p>Escolha o tipo de material:</p>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="banner">
        Banner
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="folder">
        Folder
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="certificado">
        Certificado
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="aviso">
        Aviso
      </label>
        <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="outro">
        Outro*
      </label>

       <a class="ls-tag-info ls-float-right">*Informar o tipo de material na descrição da solitição</a>

    </div>
  </fieldset>
  <hr>

          <fieldset>
    <div class="ls-label col-md-12">
      <p>Escolha o tipo de papel:</p>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="a3">
        A3
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="a4">
        A4
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="colche">
        Colchê
      </label>
      <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="fotografico">
        Fotográfico
      </label>
        <label class="ls-label-text">
        <input type="radio" name="material" class="ls-field-radio" value="outro">
        Outro*
      </label>

      <a class="ls-tag-info ls-float-right">*Informar o tipo de papel na descrição da solitição</a>

    </div>
  </fieldset>
  <hr>
 <fieldset>
             <label class="ls-label col-md-12">
          <b class="ls-label-text">Justificativa</b>
          <textarea rows="8" name="descricao-impressao"  class="ls-textarea-autoresize" required></textarea>
        </label>

        <div class="ls-label col-md-12">
            <label for="exampleInputFile">Envio de arquivos</label>
            <input id="exampleInputFile" type="file">
        </div>

      <label class="ls-label col-md-12">
        <b class="ls-label-text">Links úteis</b>


        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="link-1"  placeholder="Insira o URL de um link externo" required >
        </div>
      </label>

      <label class="ls-label col-md-12">
        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="link-2" placeholder="Insira o URL de um link externo" required >
        </div>
      </label>

      <label class="ls-label col-md-12">
        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="link-3" placeholder="Insira o URL de um link externo" required >
        </div>
      </label>
      </fieldset>

      <div class="ls-actions-btn">
        <button class="ls-btn">Enviar</button>
        <button class="ls-btn-danger">Cancelar</button>
      </div>
    </form>


</div>