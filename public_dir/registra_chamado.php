<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    $arquivo = fopen('../private_dir/arquivo.txt', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: home.php?reg=real');


?>