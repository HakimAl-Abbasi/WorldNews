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


    public function getAllCategoryId($id)
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_ID;
        $info = array('cat_id'=>$id);
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
        $model = new categories_mode();
        $sql = $model::DELETE_USER_DATA;
        $info = array('cat_id'=>$id);
        $db =$this->delete($sql,$info);
        return $db;
    }



    public function UpdateUser($id)
    {
        $model = new categories_mode();
        $sql = $model::UPDATE_USERS_ID;
        $info = array('User_ID'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }

}