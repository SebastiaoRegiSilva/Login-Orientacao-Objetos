<?php
session_start();

    $usuario = 'admin';
    $senhaMD5 = md5('123456');
    $senhaEncript = crypt($senhaMD5, 'etec');

    if(isset($_POST['btnLogin'])){
        $senhaUser = crypt(md5($_POST['pass']), 'etec');
        echo "entrou.";
        if($_POST['username'] == $usuario && $senhaUser == $senhaEncript){
            $_SESSION['usuario'] = $_POST['username'];
             
            // Header ele faz o redirecionamento pra outra página.
            header('Location: principal.php');
        }
        else{
            header('Location: index.php?erro=1');
        }
    }
?>