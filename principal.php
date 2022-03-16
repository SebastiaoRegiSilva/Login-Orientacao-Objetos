<?php
    // Iniciar a sessão que identificará se o usuário está logado. Pela Session não se rotea dados sensíveis.
    session_start();
    echo $_SESSION['usuario'];

?>