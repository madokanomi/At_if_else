<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: content: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link ref="stylesheet" href="https://fonts.google.com/share?selection.family=Cairo:wght@200..1000|Overpass:ital,wght@0,100..900;1,100..900">
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script>

      
    </script>
</head>
<body>

<?php
$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$media = ($n1+$n2+$n3) / 3;

if ($media >= 7) {
    echo "	  <br><center><h1>Calculadora de Notas - *APROVADO* </h1></center>";
} 
else{
    echo "<br><center><h1>Calculadora de Notas - *REPROVADO* </h1></center>";
}
?>
    <br>

    <br>
   
    <div class="container text-center">
  <div class="row">
      <div class="col-4">
      <h3>Nome: </h3>
    </div>
    <div class="col-2">
      <h6>1° Nota</h6>
    </div>
    <div class="col-2">
      <h6 class="sb">2° Nota</h6>
    </div>
    <div class="col-2">
      <h6 class="tb">3° Nota</h6>
    </div>
    <div class="col-2">
      <h6 class="tb">Média</h6>
    </div>
  </div>
  <hr>
<div class="container text-center">
  <div class="row">
      <div class="col-4">
      <?php
      echo "<h3>$nome</h3>";
      ?>
    </div>
    <div class="col-2">
    <?php
      echo "<h3>$n1</h3>";
      ?>
    </div>
    <div class="col-2">
    <?php
      echo "<h3>$n2</h3>";
      ?>
    </div>
    <div class="col-2">
    <?php
      echo "<h3>$n3</h3>";
      ?>
    </div>
    <div class="col-2">
    <?php
      echo "<h3>$media</h3>";
      ?>
    </div>
      <hr/>
  </div>
</div>


<BR>
 <form action="index.html" method="post">
<button class="botao" type="submit">Voltar</button> 

    <br>
 </div>
</form>


     
</body>
</html>