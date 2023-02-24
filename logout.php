<?php
    session_start();
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['logado'] = False;
    header('Location: home.php');
    exit();

?>