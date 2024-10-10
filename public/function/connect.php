<?php

    $connect = new mysqli("localhost", "root", "", "db_demo_2024");

    if(!$connect){
        echo "Ошибка подключения к базе данных";
    }

?>