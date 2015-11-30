
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Notícias</title>
    
  </head>

  <body>

    <nav class="nav nav-aberta">
			<div class="wrap">
				<form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Envio de notícias</legend>

     <div class="pure-u-1 pure-u-md-1-3">
                <label for="obs">Título</label>
                <input id="obs" class="pure-u-23-24" type="text" required>
            </div>
			
        
           <div class="pure-u-1 pure-u-md-1-3">
                <label for="justificativa">Justificativa: </label>
                <input id="justificativa" class="pure-u-23-24" type="email" required>
            </div>

			<div class="pure-u-1 pure-u-md-1-3">
                <label for="Anexos">Anexos </label>
                <input id="Anexos" class="pure-u-23-24" type="email" required>
            </div>
			
		<form method="post" action="recebe_upload.php" enctype="multipart/form-data">
  <label>Arquivo</label>
  <input type="file" name="arquivo" />
  
  <input type="submit" value="upload de arquivo" />
</form>

           


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
