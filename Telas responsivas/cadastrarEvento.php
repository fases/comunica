<?php
  
    include 'conexao.php';

    $data = $_POST['data_evento'];
    echo "<p>".$_POST["data_evento"]."</p>";
    $hora = $_POST["hora_evento"];
    $responsavel = $_POST["responsavel"];
    $local = $_POST["local"];
    $descricao = $_POST["descricaoevento"];
    $obs = $_POST["obs_evento"];

    $sql= "INSERT INTO Eventos (data_evento,hora_evento,responsavel,local,descricaoevento,obs_evento) VALUES";
     $sql .= "('$data', '$hora', '$responsavel', '$local', '$descricao', '$obs');";
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