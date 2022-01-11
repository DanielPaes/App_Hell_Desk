<?php

    session_start();

    $usuarios_app = array(
        array('id' => '1', 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil' => 1),
        array('id' => '2', 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil' => 2),
        array('id' => '3', 'email' => 'joao@teste.com.br', 'senha' => '123456', 'perfil' => 2),
        array('id' => '4', 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil' => 2)
    );

    $ent_email = $_POST['email'];

    $ent_senha = $_POST['senha'];

    $usuario_autenticado = false;

    foreach($usuarios_app as $user){
        if($user['email'] == $ent_email && $user['senha'] == $ent_senha){
            $usuario_autenticado = true;
            $id = $user['id'];
            $perfil = $user['perfil'];          
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';        
        header('Location: home.php');
        $_SESSION['id'] = $id;
        $_SESSION['perfil'] = $perfil;
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }

?>