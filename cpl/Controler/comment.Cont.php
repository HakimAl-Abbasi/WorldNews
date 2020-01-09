<?php
@include('../includes/loader.inc.php');
@include('../Model/Posts.mod.php');

class Cont extends DB
{
    public function getAllComment()
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES;

        $db = $this->select($sql);
        return $db;
    }

    public function getCommentId($id)
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_ID;
        $info = array('cat_id'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }




    public function InsertIntoComment($info)
    {

        $model = new categories_mode();

        $sql = $model::INSERT_ALL_CATEGORIES;

        $db = $this->insert($sql,$info);
        return$db;

    }

    public  function deleteComment($id)
    {
        $model = new categories_mode();
        $sql = $model::DELETE_CATEGORIES_DATA;
        $info = array('cat_id'=>$id);
        $db =$this->delete($sql,$info);
        return $db;
    }



    public function UpdateComment($id)
    {
        $model = new categories_mode();
        $sql = $model::UPDATE_CATEGORIES_ID;

        $db = $this->select($sql,$id);
        return $db;
    }
}