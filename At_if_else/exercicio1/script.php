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
            <p class="logo">Medidor de Temperatura</p>
            <ul class="nav-list">
                </ul>
            </nav>
            </header>
    <center>
        <br>
<?php
$temp = $_POST['temp'];

if ($temp < 0) {
    echo "<fieldset><<label>Frio Congelante!!</label></fieldset> ";
} elseif($temp >= 0 && $temp <=15){
echo "<fieldset><label>Muito Frio !!</label></fieldset>";
}
elseif ($temp >= 15 && $temp < 25){
    echo "<fieldset><label>Clima ameno</label></fieldset>";
}
else{
echo "<fieldset><label>Calor</label></fieldset>";
}

 ?>
<br><br>
<form action="index.html" method="post">
        <button type="submit">Voltar</button>
</body>
</html>