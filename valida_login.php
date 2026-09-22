<?php
session_start();


$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];


$usuario_correto = "admin";
$senha_correta   = "123";


if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
} else {
    header('Location: index.php?login=erro');
}