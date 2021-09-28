<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trabalho Pratico 1</title>
    <link rel="stylesheet" href="_cdn/css/bootstrap.css">
    <link rel="stylesheet" href="_cdn/css/app.css">
</head>
<body>
<div class="content">
    <header>
        <div class="container d-flex justify-content-between align-items-center pt-3">
            <div class="logo">
                <h2><a href="index.php" class="text-white">Finge que é uma logo</a></h2>
            </div>
            <div class="itens">
                <ul class="p-2">
                    <li><a href="index.php?page=home" class="nav-link <?= isset($_GET['page'])&&$_GET['page']=="home"?"active":"text-white"?>">Home</a></li>
                    <li><a href="index.php?page=produto" class="nav-link <?= isset($_GET['page'])&&$_GET['page']=="produto"?"active":"text-white"?>">Produto</a></li>
                    <li><a href="index.php?page=sobre" class="nav-link text-white">Sobre</a></li>
                    <li><a href="index.php?page=contato" class="nav-link text-white">Contato</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php
        if(isset($_GET['page']) && file_exists($_GET['page'].".php")){
            include $_GET['page'].'.php';
        }else{
            $var = "Página";
            $gender = "a";
            include '404.php';
        }
    ?>
    <footer class="text-white bg-primary d-flex justify-content-center py-2">
        <p>Desenvolvido por Cristian e Douglas©Todos os direitos reservados</p>
    </footer>
</div>
<div id="dv-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header bg-white">
            <h1>Mensagem enviada com sucesso</h1>
        </div>

        <div class="modal-body bg-white">
            <p>Obrigado por entrar em contato conosco, estaremos retornando assim que possivel</p>
        </div>

        <div class="modal-footer bg-white">
            <button class="btn btn-primary" onclick="closeModal('dv-modal')">Fechar</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="_cdn/js/script.js"></script>
<?php if (isset($_SESSION['validate']) && $_SESSION['validate']) {
    unset($_SESSION['validate']);
    ?>
    <script>
        openModal('dv-modal')
    </script>
<?php } ?>
</body>
</html>