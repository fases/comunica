<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Cadastrar usuário</h1>
    <p>Página de cadastro de novos usuários</p>
    <hr />

<div class="ls-clearfix"></div>

    <form method="post" class="ls-form ls-form-horizontal" data-ls-module="form">


      <fieldset>
    <label class="ls-label col-md-12 " >
      <b class="ls-label-text" >Nome</b>
      <p class="ls-label-info">Digite seu nome completo</p>
      <input type="text" name="nome" class="ls-field" placeholder="Nome e sobrenome" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">E-mail</b>
      <p class="ls-label-info">Seu e-mail </p>
      <input type="text" name="email" placeholder="Escreva seu email" required >
    </label>

    <label class="ls-label col-md-3">
      <span class="ls-label-text">Matrícula</span>
      <p class="ls-label-info">Matrícula institucional</p>
      <input type="text" name="matricula" required>
     </label>

    <label class="ls-label col-md-8">
      <b class="ls-label-text">Endereço</b>
      <input type="text" name="endereco" placeholder="O nome da sua rua, número" required >
    </label>

    <label class="ls-label col-md-4">
      <b class="ls-label-text">Telefone</b>
      <input type="text" name="telefone" class="ls-mask-phone9_with_ddd" placeholder="(xx) xxxxx-xxxx" required>
    </label>
  </fieldset>

        <fieldset>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="password_field" name="senha" required="">
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#">
          </a>
      </div>
    </label>
  </fieldset>
    <fieldset>
                <label class="ls-label col-md-4">
                <span class="ls-label-text">Confirmação de senha</span>
                <input type="password" name="confirma_senha" required>
            </label>

  </fieldset>
    
           
          <!-- <label class="ls-label col-md-3">
                <span class="ls-label-text">Informação</span>
                <textarea rows="4" name="informacao"></textarea>
                <p class="ls-helper-text">Preencha informações adicionais do usuário. Ex.: Dados de contato, endereço, etc.</p>
            </label> -->


          <div class="ls-actions-btn">
        <button type="submit" class="ls-btn-primary" aria-expanded="false">Enviar</button>
        <button type="reset" class="ls-btn-danger">Cancelar</button>
      </div>


    </form>


</div>    


