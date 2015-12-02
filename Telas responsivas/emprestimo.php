<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Emprestimo</title>
    
  </head>

<?php
#chama o arquivo de configuração com o banco
include 'conexao.php';

#seleciona os dados da tabela produto

$sql = ("SELECT * FROM material");
$query = mysqli_query($con, $sql);


# abaixo montamos um formulário em html
# e preenchemos o select com dados
?>

<body>

  <nav class="nav nav-aberta">
   <div class="wrap">
    <form name="emprestimo" method="get" action="insertEmprestimo.php">
      <fieldset>
        <legend>Agendamento de emprestimo</legend>

        <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-3">
            <label for="date">Data: </label>
            <input id="date" class="pure-u-23-24" type="date">
          </div>

          <div class="pure-u-1 pure-u-md-1-3">
            <label for="hora">Horário: </label>
            <input id="hora" class="pure-u-23-24" type="time">
          </div>

          <div class="pure-u-1 pure-u-md-1-3">
           <label for="material">Material:</label>
           
           <select id="material">
              <option> Selecione... </option>
           
         <?php while($resultado = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $resultado['idmaterial'] ?>">
          <?php echo $resultado['nomematerial'] ?>

        </option>
         <?php } ?>
 
          </select>

        </div>
             
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="justificativa">Justificativa: </label>
          <input id="justificativa" class="pure-u-23-24" type="email" required>
        </div>


        <div class="pure-u-1 pure-u-md-1-3">
          <label for="obs">Observações:</label>
          <input id="obs" class="pure-u-23-24" type="text" required>
        </div>



      </select>
    </div>
  </div>
  <button class="pure-button">Enviar</button>


  <button type="submit" class="pure-button pure-button-primary">Cancelar</button>

</fieldset>
</form>
</div>
</nav>




</body>
</html>
