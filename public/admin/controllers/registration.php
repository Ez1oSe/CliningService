<?php

    include('../../function/connect.php');

    $sql = sprintf("INSERT INTO `user`(`user_id`, `surname`, `name`, `patronymic`, `login`, `email`, `phone`, `password`, `role`) VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','Пользователь')",
        $_POST['surname'],
        $_POST['name'],
        $_POST['patronymic'],
        $_POST['login'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['password']
    );

    if(!$connect -> query($sql)){
        echo "Ошибка добавления данных";
    }

    header("Location: /profile/")
?>