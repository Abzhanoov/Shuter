<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."ghjsfkld2345");

    $result = $mysql->("SELECT * FROM 'user' WHERE 'login' = '$login' AND 'pass' = '$pass'");

    $mysql->close();

    header('Location: /');
?>