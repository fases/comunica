<!-- Componentes na página -->

<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-pencil">Envio de notícias</h1>

    <div class="ls-clearfix"></div>

    <?php $this->mensagem_model->exibir(); ?>


    <form method="post" class="ls-form row" enctype="multipart/form-data">
      <fieldset>
          <label class="ls-label col-md-3">
    <b class="ls-label-text">Data para publicação</b>
    <input type="text" name="data_publicacao" class="datepicker"  placeholder="dd/mm/aaaa"required>
  </label>

        <label class="ls-label col-md-12">
          <b class="ls-label-text">Título da notícia</b>
          <input type="text"  name="titulo" placeholder="Digite sobre o que a notícia se trata" required >
        </label>
        <label class="ls-label col-md-12">
          <b class="ls-label-text">Descrição</b>
          <textarea rows="10" name="descricao" class="ls-textarea-autoresize ls-textarea-resize-vertical " required ></textarea>
        </label>
      
       <div class="ls-label col-md-12">
            <label for="exampleInputFile">Envio de arquivos</label>
            <input id="exampleInputFile" name="arquivo_1" type="file">
            <a class="ls-tag-info ls-float-right">*Em caso de mais de um arquivo, enviá-los de maneira compactada em .zip ou .rar</a>
        </div>

      <label class="ls-label col-md-12">
        <b class="ls-label-text">Links úteis</b>

        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="url_1"  placeholder="Insira o URL de um link externo" >
        </div>
      </label>

      <label class="ls-label col-md-12">
        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="url_2" placeholder="Insira o URL de um link externo" >
        </div>
      </label>

      <label class="ls-label col-md-12">
        <div class="ls-prefix-group">
          <span class="ls-label-text-prefix">URL</span>
          <input type="text" name="url_3" placeholder="Insira o URL de um link externo" >
        </div>
      </label>
      </fieldset>

      <div class="ls-actions-btn">
        <button class="ls-btn">Enviar</button>
        <button class="ls-btn-danger">Cancelar</button>
      </div>
    </form>



</div>


</div>
