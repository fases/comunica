<?php
 include 'conexao.php';

    $titulo = $_POST["titulo"];
    $justificativa_noticia = $_POST["justificativa_noticia"];
    $upload_noticias = $_POST["upload_noticias"]; 

     $sql = "INSERT INTO noticias (titulo, justificativa_noticia) VALUES ('$titulo', '$justificativa_noticia')";
     
     $resultado = mysqli_query($con, $sql);
     
      if($resultado){
        echo "Notícia enviada";
        header("Location: noticias.php");
      }else{
        echo "Erro: ".mysqli_error($con);
      }

?>