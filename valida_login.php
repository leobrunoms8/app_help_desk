<?php

    session_start();


    //variável que verifica se a autenticação foi realizada
    $usurio_autenticado = false;

    // usurários do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';

    foreach($usuarios_app as $user){
        $user['email'];
        $user['senha'];

        echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];

        echo '<br />';

        echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usurio_autenticado = true;
        }


        echo '<hr/>';
    }

    if($usurio_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

/*
    print_r($_GET);

    echo '<br />';

    echo ($_GET['email']);
    echo '<br />';
    echo ($_GET['senha']);

*/

/*
    print_r($_POST);

    echo '<br />';

    echo ($_POST['email']);
    echo '<br />';
    echo ($_POST['senha']);
*/


?>