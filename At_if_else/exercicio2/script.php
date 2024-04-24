<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script>


        </script>
</head>
<body>
<header>
        <nav>
            <p class="logo">Calculadora de IMC</p>
            <ul class="nav-list">
                </ul>
            </nav>
            </header>
    <center>
        <br> <br><fieldset class="resultado">

        <br>

        <label style="color:aqua;"> Seu IMC  ‎  ‎  ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Classificação </label>
        <br>
<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / $altura ** $altura;
if ($imc < 18.5) {
    echo "<label>$imc ‎-   ‎ Abaixo do Peso Normal! </label> ";
} elseif($imc >= 18.5 && $imc <=24.9){
echo "<label>$imc ‎-   ‎Peso Normal!</label>";
}
elseif ($imc >= 25 && $imc < 29.9){
    echo "<label>$imc ‎-   ‎Excesso de Peso!</label>";
}
elseif ($imc >= 30 && $imc < 34.9){
    echo "<label>$imc‎-   ‎ Obesidade Classe 1 !</label>";
}
elseif ($imc >= 35 && $imc < 39.9){
    echo "<label>$imc ‎-   ‎ Obesidade Classe 2!</label>";
}
else{
echo "<label>$imc‎-   ‎ Obesidade Classe 3!</label>";
}

 ?></fieldset>
<br><br>
<form action="index.html" method="post">
        <button type="submit">Voltar</button>
</body>
</html>