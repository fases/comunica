<!-- Componentes na página -->

<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-folder ">Meus pedidos</h1>

  <!-- Apartir daqui, vocês devem inserir os componentes na página -->

 <!-- <div class="ls-box-filter">
        <form class="ls-form ls-form-inline ls-float-left" action="">
            <label class="ls-label col-md-6 col-sm-8">
                <b class="ls-label-text">Status</b>
                <div class="ls-custom-select ls-field-sm">
                    <select class="ls-select" name="">
                        <option>Ativos</option>
                        <option>Desativados</option>
                        <option>Todos</option>
                    </select>
                </div>
            </label>
                        <div class="ls-actions-btn ">
                <input type="submit" aria-expanded="false" title="Buscar" class="ls-btn ls-btn-sm" value="Buscar">
            </div>
        </form>
    </div> -->


  <table class="ls-table ls-bg-header">
    <thead>
      <tr>
        <th>ID</th>
        <th class="hidden-xs ls-data-descending"><a href="#">Tipo</a></th>
        <th class="ls-data-ascending"><a href="#">Status</a></th>
        <th class="hidden-xs ls-data-ascending"><a href="#">Data de envio</a></th>
        <th> </th>
      </tr>
    </thead>


        <!-- Abre o foreach--> <?php 
    foreach ($contatos as $contato) { 
      ?>
      <tbody>
        <tr>
          <td><a href="" title=""><?php echo '#00'. $contato->id?></a></td>
          <td>Contato</td>
          <td>
            <?php
            switch ($contato->status){
              case 1:
              echo "Enviado";
              break;
              case 2:
              echo "Em andamento";
              break;
              case 3:
              echo "Concluído";
              break;
              case 4:
              echo "Cancelado";
              break;
            }
            ?>
          </td>

          <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($contato->data_cadastro));?> </td>

                          <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/contato/<?php echo $contato->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>

          </tr>
        </tbody>
        <?php }?> <!-- Fecha o foreach-->


    <!-- Abre o foreach--> <?php 
    foreach ($emprestimos as $emprestimo) { 
      ?>
      <tbody>
        <tr>
          <td><a href="" title=""><?php echo '#00'. $emprestimo->id?></a></td>
          <td>Empréstimo</td>
          <td>
            <?php
            switch ($emprestimo->status){
              case 1:
              echo "Enviado";
              break;
              case 2:
              echo "Em andamento";
              break;
              case 3:
              echo "Concluído";
              break;
              case 4:
              echo "Cancelado";
              break;
            }
            ?>
          </td>

          <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($emprestimo->data_cadastro));?> </td>

                          <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/emprestimos/<?php echo $emprestimo->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>

          </tr>
        </tbody>
        <?php }?> <!-- Fecha o foreach-->

        <!-- Abre o foreach--> <?php 
        foreach ($eventos as $evento) { 
          ?>
          <tbody>
            <tr>
              <td><a href="" title=""><?php echo '#00'. $evento->id?></a></td>
              <td>Cobertura de evento</td>
              <td>
                <?php
                switch ($evento->status){
                  case 1:
                  echo "Enviado";
                  break;
                  case 2:
                  echo "Em andamento";
                  break;
                  case 3:
                  echo "Concluído";
                  break;
                  case 4:
                  echo "Cancelado";
                  break;
                }
                ?>
              </td>

              <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($evento->data_cadastro));?> </td>

                                        <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/eventos/<?php echo $evento->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>

            </tr>
          </tbody>
          <?php }?> <!-- Fecha o foreach-->

          <!-- Abre o foreach--> <?php 
          foreach ($noticias as $noticia) { 
            ?>
            <tbody>
              <tr>
                <td><a href="" title=""><?php echo '#00'. $noticia->id?></a></td>
                <td>Publicação de notícia</td>
                <td>
                  <?php
                  switch ($noticia->status){
                    case 1:
                    echo "Enviado";
                    break;
                    case 2:
                    echo "Em andamento";
                    break;
                    case 3:
                    echo "Concluído";
                    break;
                    case 4:
                    echo "Cancelado";
                    break;
                  }
                  ?>
                </td>

                <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($noticia->data_cadastro));?> </td>

                                          <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/noticias/<?php echo $noticia->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>

              </tr>
            </tbody>
            <?php }?> <!-- Fecha o foreach-->


            <!-- Abre o foreach--> <?php 
            foreach ($materiais_impressao as $impressao) { 
              ?>
              <tbody>
                <tr>
                  <td><a href="" title=""><?php echo '#00'. $impressao->id?></a></td>
                  <td>Impressão de Material</td>
                  <td>
                    <?php
                    switch ($impressao->status){
                      case 1:
                      echo "Enviado";
                      break;
                      case 2:
                      echo "Em andamento";
                      break;
                      case 3:
                      echo "Concluído";
                      break;
                      case 4:
                      echo "Cancelado";
                      break;
                    }
                    ?>
                  </td>

                  <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($impressao->data_cadastro));?> </td>

                                            <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/material_impressao/<?php echo $impressao->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>


                </tr>
              </tbody>
              <?php }?> <!-- Fecha o foreach-->

              <!-- Abre o foreach--> <?php 
              foreach ($materiais_producao as $producao) { 
                ?>
                <tbody>
                  <tr>
                    <td><a href="" title=""><?php echo '#00'. $producao->id?></a></td>
                    <td>Produção de Material</td>
                    <td>
                      <?php
                      switch ($producao->status){
                        case 1:
                        echo "Enviado";
                        break;
                        case 2:
                        echo "Em andamento";
                        break;
                        case 3:
                        echo "Concluído";
                        break;
                        case 4:
                        echo "Cancelado";
                        break;
                      }
                      ?>
                    </td>

                    <td> <?php echo date ("d/m/Y \à\s H:i", strtotime($producao->data_cadastro));?> </td>

                                              <td class="ls-txt-right ls-regroup">

                    <a href="<?php echo base_url() ?>pedidos/material_producao/<?php echo $producao->id;?>" class="ls-btn ls-btn-sm" aria-expanded="false">Visualizar</a>
                    </td>

                  </tr>
                </tbody>
                <?php }?> <!-- Fecha o foreach-->

    <!--  <tr>
        <td><a href="" title="">#0011</a></td>
        <td class="hidden-xs">Campanha</td>
        <td>Enviada</td>
        <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
      </tr> -->


    </table>


  </div>
</div>
