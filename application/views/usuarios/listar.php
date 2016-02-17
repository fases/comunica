<div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-users">Listagem de usuários</h1>
    <hr />

    <a href="<?php echo base_url() ?>usuarios/cadastrar" class="ls-btn-primary" aria-expanded="false">Cadastrar novo</a>

    <div class="ls-box-filter">
        <form action="" class="ls-form ls-form-inline ls-float-left">
            <label class="ls-label col-md-6 col-sm-8">
                <b class="ls-label-text">Status</b>
                <div class="ls-custom-select ls-field-sm">
                    <select name="" class="ls-select">
                        <option>Todos</option>
                        <option>Ativos</option>
                        <option>Desativados</option>
                    </select>
                </div>
            </label>
        </form>

        <form action="" class="ls-form ls-form-inline ls-float-right">
            <label class="ls-label" role="search">
                <b class="ls-label-text ls-hidden-accessible">Nome do cliente</b>
                <input type="text" id="q" name="q" aria-label="Faça sua busca por cliente" placeholder="Nome do cliente" required="" class="ls-field-sm">
            </label>
            <div class="ls-actions-btn">
                <input type="submit" value="Buscar" class="ls-btn ls-btn-sm" title="Buscar" aria-expanded="false">
            </div>
        </form>
    </div>

    <table class="ls-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th class="ls-txt-center hidden-xs">Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            
            
            <tr>
                <td>
                    <a href="<?php echo base_url() ?>usuarios/visualizar">João da Silva</a>
                    <span class="ls-tag hidden-xs">Não recorrente</span>
                </td>
                <td>
                    joao.silva@ifrn.edu.br
                </td>
                <td class="ls-txt-center hidden-xs">Ativo</td>
                <td class="ls-txt-right ls-regroup">
                    <a href="<?php echo base_url() ?>usuarios/visualizar" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
                        <a href="#" class="ls-btn ls-btn-sm" aria-expanded="false" role="combobox"></a>
                        <ul class="ls-dropdown-nav" aria-hidden="true">
                            <li><a href="#" role="option">Editar</a></li>
                            <li><a href="#" class="ls-color-danger" role="option">Excluir</a></li>
                        </ul>
                    </div>

                </td>
            </tr>

        </tbody>
    </table>

    <div class="ls-pagination-filter">
        <ul class="ls-pagination">
            <li><a href="#">« Anterior</a></li>
            <li class="ls-active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#" class="hidden-xs">4</a></li>
            <li><a href="#" class="hidden-xs">5</a></li>
            <li><a href="#">Próximo »</a></li>
        </ul>

        <div class="ls-filter-view">
            <label for="">
                Exibir
                <div class="ls-custom-select ls-field-sm">
                    <select name="" id="">
                        <option value="10">10</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                ítens por página
            </label>
        </div>
    </div>


</div>
