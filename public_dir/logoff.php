<?php

    /*
    // remover índices do array de sessão
    //unsey()

    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    
    
    unset($_SESSION['x']); // Se não houver o índice, não gera erro

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>"; */

    // destruir a variável de sessão
    //sesseion_destroy()

    session_destroy();
    header('Location: index.php')

?>