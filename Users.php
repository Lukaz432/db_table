<?php
namespace user;

include_once 'Database.php';
include_once 'Tables.php';
include_once 'Forms.php';

use db\Database;
use datatable\Tables;
use form\Forms;

class Users extends Database
{
//    metodas nr1
    public function getAllUsersDate()
    {
        $db = New Database();
        $sql = "SELECT * FROM `users` WHERE 1";
        $allUsersDateArray = $db->select($sql);
        //var_dump($allUsersDateArray);
    }

//    metodas nr2
    public function getAllUsersNameAndDateInTable()
    {
        $db = New Database();
        $sql = "SELECT `name`, `date` FROM `users` WHERE 1";
        $allUsersDateArray = $db->select($sql);
        $table = New Tables();
        $table->table($allUsersDateArray);
    }

//    metodas nr3
    public function getNameLastnameCarCostFromUsersAndCarsInTable()
    {
        $db = New Database();
        $sql = "SELECT `name`, `lastname`, `car`, `cost` FROM `users`, `cars` WHERE `name` = `user_name`";
        $allUsersDateArray = $db->select($sql);
        $table = New Tables();
        $table->table($allUsersDateArray);
    }

    public function getAllFromDarbovietesAndUsers()
    {
        $db = New Database();
        $sql = "SELECT * FROM `darbovietes`, `users`  WHERE `name` = `user_name`";
        $allUsersDateArray = $db->select($sql);
        $table = New Tables();
        $table->table($allUsersDateArray);
    }

    public function deleteData($sql)
    {
        $form = New Forms();
        $form->deleteForm();

        if (isset($_POST['delete'])) {
            $name = ['user_name' => $_POST['user_name']];
            $db = New Database();
            $db->deleteInsert($sql, $name);
        }
    }

    public function insertUserData($sql)
    {
        $form = New Forms();
        $form->insertUserForm();

        if (isset($_POST['insert'])) {
            $name = [
                'name' => $_POST['name'],
                'lastname' => $_POST['lastname'],
                ];
            $db = New Database();
            $db->deleteInsert($sql, $name);
        }
    }
}
?>