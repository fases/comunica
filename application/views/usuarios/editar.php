<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Editar usuário</h1>


<div class="ls-clearfix"></div>

    <form method="post" class="ls-form ls-form-horizontal" data-ls-module="form">


      <fieldset>



<div class="ls-box">
<b class="ls-label-text">

<h3 class="ls-title ls-ico-cog"> Permissões</h3>
</b>
<hr>

  <label class="ls-label col-md-3">
  <b class="ls-label-text">

<h3 class="ls-title ls-ico-info"> É importante lembrar que estas permissões controlam o acesso e funcionalidades do sistema, ou seja, as altere com cautela.</h3>
</b>
  </label>
      <label class="ls-label col-md-3">
      <b class="ls-label-text">Administrador</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="tipo_acesso">


<?php if ($tipo_acesso==2) {
  echo '<option selected="selected" value="2">Não</option>';
  echo '<option value="1">Sim</option>';

}elseif ($tipo_acesso==1) {
  echo '-<option selected="selected" value="1">Sim</option>';
  echo '<option value="2">Não</option>';
} ?>


        </select>
      </div>
    </label>

      <label class="ls-label col-md-3">
      <b class="ls-label-text">Status</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="status">


<?php if ($status==0) {
  echo '<option selected="selected" value="0">Inativo</option>';
  echo '<option value="1">Ativo</option>';

}elseif ($status==1) {
  echo '-<option selected="selected" value="1">Ativo</option>';
  echo '<option value="0">Inativo</option>';
} ?>


        </select>
      </div>
    </label>


   <div class="col-md-3">
      <div class="ls-box">
       
       <b class="ls-label-text ls-ico-calendar">Data de cadastro: <?php echo $data_cadastro ?></b>
      </div>
    </div> 
    </div>


    <label class="ls-label col-md-12 " >
      <b class="ls-label-text" >Nome</b>
      <p class="ls-label-info">Digite seu nome completo</p>
      <input type="text" name="nome" class="ls-field" placeholder="Nome e sobrenome" value="<?php echo $nome ?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">E-mail</b>
      <p class="ls-label-info">Seu e-mail </p>
      <input type="text" name="email" placeholder="Escreva seu email" value="<?php echo $email ?>" required >
    </label>

    <label class="ls-label col-md-3">
      <span class="ls-label-text">Matrícula</span>
      <p class="ls-label-info">Matrícula institucional</p>
      <input type="text" name="matricula" value="<?php echo $matricula ?>"required>
     </label>

    <label class="ls-label col-md-8">
      <b class="ls-label-text">Endereço</b>
      <input type="text" name="endereco" placeholder="O nome da sua rua, número"  value="<?php echo $endereco ?>" required >
    </label>

    <label class="ls-label col-md-4">
      <b class="ls-label-text">Telefone</b>
      <input type="text" name="telefone" class="ls-mask-phone9_with_ddd" placeholder="(xx) xxxxx-xxxx" value="<?php echo $telefone ?>" required>
    </label>
</fieldset>

    <!--    <fieldset>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="password_field" name="senha" >
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#">
          </a>
      </div>
    </label>
  </fieldset>
    <fieldset>
                <label class="ls-label col-md-4">
                <span class="ls-label-text">Confirmação de senha</span>
                <input type="password" name="confirma_senha">
            </label>

  </fieldset> -->
    
           
          <!-- <label class="ls-label col-md-3">
                <span class="ls-label-text">Informação</span>
                <textarea rows="4" name="informacao"></textarea>
                <p class="ls-helper-text">Preencha informações adicionais do usuário. Ex.: Dados de contato, endereço, etc.</p>
            </label> -->


          <div class="ls-actions-btn">
        <button type="submit" class="ls-btn-primary" aria-expanded="false">Atualizar</button>
        <button type="reset" class="ls-btn-danger">Cancelar</button>
        <a aria-expanded="false" onClick="JavaScript: window.history.back();" class="ls-btn">Voltar</a>
      </div>


    </form>


</div>    


