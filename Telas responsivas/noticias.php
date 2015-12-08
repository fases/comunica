
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Notícias</title>

</head>

<body>

  <nav class="nav nav-aberta">
   <div class="wrap">
    <form class="pure-form pure-form-stacked" action="insertNoticia.php" method="post">

      <fieldset>

        <legend>Envio de notícias</legend>

        <div class="pure-u-1 pure-u-md-1-3">
          <label for="titulo">Título</label>
          <input id="id_titulo" name="titulo" class="pure-u-23-24" type="text" required>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
          <label for="justificativa">Justificativa: </label>
          <input id="id_justificativa" name="justificativa_noticia" class="pure-u-23-24" type="text" required>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
          <label for="upload">Upload </label>
          <input id="id_upload" name="upload" class="pure-u-23-24" type="text" >
        </div>

        <form method="post" action="recebe_upload.php" enctype="multipart/form-data">
          <label>Arquivo</label>
          <input type="file" name="arquivo" />
          <form action="up_bt.php" method="get">
          <input type="submit" value="upload de arquivo" />
        </form>
      </form>

 <br/>
        <button class="pure-button">Enviar</button>        

<form action="funcao_btn.php" method="get" >  </br>

        <button type="submit" class="pure-button pure-button-primary"> Cancelar</button>
        </form>

</fieldset>
</form>
</div>
        
</form>

</nav>
  </body>
</html>