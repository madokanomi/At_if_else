<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script>
        <?php
$temp = $_POST['temp'];

if ($temp < 0) {
    echo "Frio Congelante!! ";
} elseif($temp >= 0 && $temp <=15){
echo "Muito Frio !!";
}
elseif ($temp <= 15 && $temp < 25){
    echo "Clima ameno";
}
else{
echo "Calor";
}
?>
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
    <fieldset>
    <form action="script.php" method="post">
        <br>
        <label for ="">Digite a Temperatura</label>      <br><br><br><br><br><br><br><br><br>
<input type="number" name="temp" id="temp">      <br>      <br><br>

        <button type="submit">Enviar</button><br><br><br><br>
 </form></fieldset></center>
</body>
</html>