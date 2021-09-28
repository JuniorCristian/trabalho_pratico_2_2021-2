<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto <?= $_GET['produto']?></title>
</head>
<body>
<?php
    if(isset($_GET['produto']) && file_exists($_GET['produto'].'.php')){
        include $_GET['produto'].'.php';
    }else{
        $var = "Produto";
        $gender = "o";
        include '404.php';
    }
?>
</body>
</html>