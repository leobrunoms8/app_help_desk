<?php
    session_start();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover índices do array de sessão
    // utilizar a função nativa "unset()" - sendo arrays pode utilizar essa função

    unset($_SESSION['y']);

    //destruir a variável de sessão
    //session_destroy()

    session_destroy();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    header('Location: index.php');



?>