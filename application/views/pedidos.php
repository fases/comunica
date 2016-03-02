<!-- Componentes na página -->

<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-folder ">Meus pedidos</h1>

  <!-- Apartir daqui, vocês devem inserir os componentes na página -->

  <table class="ls-table ls-bg-header">
    <thead>
      <tr>
        <th>ID</th>
        <th class="hidden-xs ls-data-descending"><a href="#">Tipo</a></th>
        <th class="ls-data-ascending"><a href="#">Status</a></th>
        <th class="hidden-xs ls-data-ascending"><a href="#">Data de envio</a></th>
      </tr>
    </thead>
    <tbody>

      <!-- Abre o foreach--> <?php 
      foreach ($materiais_impressao as $impressao) { 
        ?>

        <tr>
          <td><a href="" title=""><?php echo '#00'. $impressao->id?></a></td>
        </tr>

        <?php }?> <!-- Fecha o foreach-->

    <!--  <tr>
        <td><a href="" title="">#0011</a></td>
        <td class="hidden-xs">Campanha</td>
        <td>Enviada</td>
        <td class="hidden-xs">21/09/2013 as 20:00 PM</td>
      </tr> -->

    </tbody>
  </table>


</div>
</div>
