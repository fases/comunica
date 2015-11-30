<?php


//RECEBE OS PARAMETROS
$id_aula = $_GET["id_aula"];
$id_aluno = $_GET["id_aluno"];
$presente = $_GET["presente"];

//CONSULTA TABELA FREQUENCIA
$comando_fre = "SELECT presente FROM frequencia WHERE id_aula=$id_aula and id_aluno=$id_aluno";
$res_fre = mysqli_query($con, $comando_fre);
$cont = mysqli_num_rows($res_fre);

if ($cont == 0) {
    $comando_fre = "INSERT INTO frequencia (id_aula, id_aluno, presente)VALUES ($id_aula, $id_aluno, $presente)";
    echo $comando_fre;
    $res_fre = mysqli_query($con, $comando_fre);

    //VERIFICA SE INSERIU
    if ($res_fre) {
        echo "</br>Inclusao realizada com sucesso!";
        header("Location: registrarfrequencia.php?id_aula=$id_aula");
    } else {
        echo "</br>Erro no insert: ".mysqli_error($con);
    }
} else {
    $comando_fre = "UPDATE frequencia SET presente =$presente WHERE id_aula=$id_aula and id_aluno=$id_aluno";
    $res_fre = mysqli_query($con, $comando_fre);

    //VERIFICA SE ATUALIZOU
    if ($res_fre) {
        echo "<br/>Atualização realizada com sucesso";
        header("Location: registrarfrequencia.php?id_aula=$id_aula");
    } else {
        echo "<br/>Erro no update: ".mysqli_error($con);
    }
}
?>