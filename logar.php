<?php
session_start();
    require('Usuario.php');
    
    $senha = $_POST['pass'];
    $usuario = $_POST['username'];
      
    if(isset($_POST['btnLogin']))
    { 
        include_once('Usuario.php');
        $login = new Usuario($usuario, $senha);
        $login->ValidateAccess($usuario, $senha);
    }
?>