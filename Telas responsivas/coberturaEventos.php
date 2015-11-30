<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cobertura de eventos</title>
    
  </head>

  <body>
    <?php if(isset($_COOKIE["mensagem"])){ echo $_COOKIE["mensagem"]; }?>
    <nav class="nav nav-aberta">
			<div class="wrap">
				<form class="pure-form pure-form-stacked" action="cadastrarEvento.php" method="post">
    <fieldset>
        <legend>Cobertura de eventos</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="date">Data: </label>
                <input id="data" name="data" class="pure-u-23-24" type="date">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="hora">Horário: </label>
                <input id="hora" name="hora" class="pure-u-23-24" type="time">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
             <label for="resposavel">Responsável:</label> 
             <input id="responsavel" name="responsavel" class="pure-u-23-24" type="text">
           </div>


           <div class="pure-u-1 pure-u-md-1-3">
             <label for="local">Local:</label> 
             <input id="local" name="local" class="pure-u-23-24" type="text">
           </div>

           <div class="pure-u-1 pure-u-md-1-3">
             <label for="descricao">Descrição:</label> 
             <input id="descricao" name="descricao" class="pure-u-23-24" type="text" required>
           </div>

           

             <!-- GERAR 
            <
             LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
             <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->

             
             </div>

        <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
        <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
        <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
        <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->
        <!-- GERAR LISTA APARTIR DE BANCO DE DADOS -->

        
           


            <div class="pure-u-1 pure-u-md-1-3">
                <label for="obs">Observações:</label>
                <input id="obs" name="obs" class="pure-u-23-24" type="text" required>
            </div>



            </select>
            </div>
        </div>
        <button type="submit" class="pure-button">Enviar</button>


                <button class="pure-button pure-button-primary">Cancelar</button>

    </fieldset>
</form>
			</div>
		</nav>
  </body>
</html>
