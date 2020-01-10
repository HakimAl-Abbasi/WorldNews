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

    public  function getUsersId($id)
    {
        $model = new User_Model();
        $sql = $model::GET_ALL_USER_ID;
        $info = array('User_ID'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }






    public function InsertIntoUser($info)
    {

        $model = new User_Model();

        $sql = $model::INSERT_INTO_USERS;

        $db = $this->insert($sql,$info);
        return$db;

    }

    public  function deleteUser($id)
    {
        $model = new User_Model();
        $sql = $model::DELETE_USERS_DATA;
        $info = array('User_ID'=>$id);
        $db =$this->delete($sql,$info);
        return $db;
    }



    public function UpdateUser($id)
    {
        $model = new User_Model();
        $sql = $model::UPDATE_USERS_ID;
        $info = array('User_ID'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }

}