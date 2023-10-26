<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sabesp = filter_input(INPUT_POST, 'sabesp', FILTER_SANITIZE_STRING);
$poco = filter_input(INPUT_POST, 'poco', FILTER_SANITIZE_STRING);
$etar = filter_input(INPUT_POST, 'etar', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Sabesp: $sabesp <br>";
//echo "Poço: $poco <br>";
//echo "Etar: $etar <br>";

$result_usuario = "INSERT INTO medicoes (nome, sabesp, poco, etar, created) VALUES ('$nome', '$sabesp', '$poco', '$etar', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-test.css">
    <title>Obrigado</title>
</head>
<body class="main">
    <h1 class="text">Obrigado pelas medições</h1>
    <p class="paragrafo">Agradecemos</p>
    <a href="index.html" class="btn">Home</a>
</body>
</html>