<?php

    include("../../function/connect.php");

    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'success':
                $sql = sprintf("UPDATE `application` SET `status`='%s' WHERE `application_id` = '%s'", 'Подтвержден', $_GET['id']);
                if(!$connect -> query($sql)){
                    echo "Ошибка добавления данных";
                }
                header("Location: /admin/");
                break;

            case 'cancel':
                $sql = sprintf("UPDATE `application` SET `status`='%s' WHERE `application_id` = '%s'", 'Отменен', $_GET['id']);
                if(!$connect -> query($sql)){
                    echo "Ошибка добавления данных";
                }
                header("Location: /admin/");
                break;
            default:
                
            header("Location: /admin/");
                break;
        }
    }
?>