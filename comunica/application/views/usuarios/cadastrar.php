<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Cadastrar usuário</h1>
    <p>Página de cadastro de novos usuários</p>
    <hr />


    <form action="/locawebstyle/documentacao/exemplos/painel1/client" class="ls-form">
        <legend class="ls-title-2">Identificação</legend>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Nome</span>
                <input type="text" name="name">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Email</span>
                <input type="text" name="email">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-3">
                <span class="ls-label-text">Senha</span>
                <input type="password" name="password">
            </label>
            <label class="ls-label col-md-3">
                <span class="ls-label-text">Confirmação de senha</span>
                <input type="password" name="password-confirmation">
            </label>
        </div>
        <div class="row">
            <label class="ls-label col-md-6">
                <span class="ls-label-text">Informação</span>
                <textarea rows="4"></textarea>
                <p class="ls-helper-text">Preencha informações adicionais do usuário. Ex.: Dados de contato, endereço, etc.</p>
            </label>
        </div>

        <hr>
        <button type="submit" class="ls-btn-primary" aria-expanded="false">Salvar</button>
        <a href="/locawebstyle/documentacao/exemplos/painel1/no-clients" class="ls-btn" aria-expanded="false">Cancelar</a>
    </form>

</div>    
