<?php
session_start();
unset($_SESSION['campos']);
$_SESSION['validate'] = true;
if (!isset($_REQUEST['nome'])) {
    $_SESSION['campos'][] = 'Nome';
    $_SESSION['validate'] = false;
}
if (!isset($_REQUEST['tel'])) {
    $_SESSION['campos'][] = 'Telefone';
    $_SESSION['validate'] = false;
}
if (!isset($_REQUEST['email'])) {
    $_SESSION['campos'][] = 'E-mail';
    $_SESSION['validate'] = false;
}
if (!isset($_REQUEST['msg'])) {
    $_SESSION['campos'][] = 'Mensagem';
    $_SESSION['validate'] = false;
}
header('Location: index.php?page=home');

