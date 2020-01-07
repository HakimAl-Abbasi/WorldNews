<?php
@include('../includes/loader.inc.php');
@include ('../Model/User.mod.php');



class User extends DB
{


    public  function getAllUsers()
    {
        $model = new User_Model();
    $sql =$model::GET_ALL_USERS;

        $db =$this->select($sql);
        return $db;
    }

}