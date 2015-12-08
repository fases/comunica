<?php

include 'conexao.php';
//RECEBE OS PARAMETROS
$nova_data = $_POST["data"];
$hora = $_POST["hora"];
$material = $_POST["material"];
$obs = $_POST["obs"];
$justificativa = $_POST["justificativa"];

//CONSULTA TABELA FREQUENCIA

$sql= "INSERT INTO emprestimo (`data_pedido_emprestimo`, `hora`, `id_material`, `justificativa_emprestimo`, `obs_emprestimo`) VALUES ('$nova_data', '$hora', '$material', '$justificativa', '$obs')";
$res = mysqli_query($con, $sql);

    //VERIFICA SE INSERIU
    if ($res) {
        echo "</br>Inclusao realizada com sucesso!";
        header("Location: emprestimo.php");
    } else {
        echo "</br>Erro no insert: ".mysqli_error($con);
    }
    mysqli_close($con);
?>