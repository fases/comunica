<?php
    // include "comunica_mysql.inc";
    include 'conexao.php';

    $date = $_POST['data'];
    echo "<p>".$_POST["data"]."</p>";
    $hora = $_POST["hora"];
    $responsavel = $_POST["responsavel"];
    $local = $_POST["local"];
    $descricao = $_POST["descricao"];
    $obs = $_POST["obs"];

    $sql= "INSERT INTO Eventos (data,hora,responsavel,local,descricao,obs) VALUES";
     $sql .= "('$date', '$hora', '$responsavel', '$local', '$descricao', '$obs');";
     $resultado = mysqli_query($con,$sql);
     if($resultado){
        echo "<p>evento enviado</p>";
        setcookie("mensagem","<p>evento enviado</p>",time()+10);
        header("Location: coberturaEventos.php");
     }else{
        echo "<p>erro ao salvar</p>";
     }
     

     mysqli_close($con);
?>