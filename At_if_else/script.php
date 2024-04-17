<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        <?php
$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$media = ($n1+$n2) / 2;

if ($media > 7) {
    echo "$nome Aprovado, essa é sua média: $media";
} elseif($media > 5){
echo "Recuperação, essa é sua $media";
}
else{
    echo "$nome Reprovado, essa é a sua média: $media";
}
?>
        </script>
</head>
<body>
    
</body>
</html>