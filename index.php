<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'Users.php';
use user\Users;
$allUsersDateArray = New Users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        table, th, td{
            border: 3px solid black;
            border-collapse: collapse;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }
        form {
            background-color: burlywood;
            height: 150px;
            width: 250px;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
<section>
    <?php
    $allUsersDateArray->deleteData('DELETE FROM `cars` WHERE `user_name` = :user_name');
    $allUsersDateArray->InsertUserData('INSERT INTO `users` (`name`, `lastname`) VALUES (:name, :lastname)');
    ?>
</section>
<section>
    <?php
    $allUsersDateArray->getNameLastnameCarCostFromUsersAndCarsInTable();
    $allUsersDateArray->getAllUsersNameAndDateInTable();
    $allUsersDateArray->getAllFromDarbovietesAndUsers();
    ?>
</section>
</body>
</html>