<?php


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];


$texto = $titulo . "<br><br>" . nl2br($descricao) . "###";


$arquivo = fopen("desabafos.txt", "a");


fwrite($arquivo, $texto);


fclose($arquivo);


header("Location: ver_desabafos.php");


?>