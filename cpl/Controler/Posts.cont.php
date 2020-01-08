<?php
@include('../includes/loader.inc.php');
class PostController
{

    public function getAllPosts()
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES;

        $db = $this->select($sql);
        return $db;
    }

    public function getPostId($id)
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_ID;
        $info = array('cat_id'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }



    public function InsertPost($info)
    {

        $model = new categories_mode();

        $sql = $model::INSERT_ALL_CATEGORIES;

        $db = $this->insert($sql,$info);
        return$db;

    }

    public  function deletePost($id)
    {
        $model = new categories_mode();
        $sql = $model::DELETE_CATEGORIES_DATA;
        $info = array('cat_id'=>$id);
        $db =$this->delete($sql,$info);
        return $db;
    }



    public function UpdatePost($id)
    {
        $model = new categories_mode();
        $sql = $model::UPDATE_CATEGORIES_ID;

        $db = $this->select($sql,$id);
        return $db;
    }

}