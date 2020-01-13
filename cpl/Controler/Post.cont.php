<?php
@include('../includes/loader.inc.php');
@include('../Model/Posts.mod.php');
class post extends DB
{


    public function getAllPosts()
    {
        $model = new Post_Model();
        $sql = $model::GET_ALL_POSTS;

        $db = $this->select($sql);
        return $db;
    }

    public function GetAllPost()
    {
        $model = new Post_Model();
        $sql = $model::GET_All_POSTS_PID;

        $db = $this->select($sql);
        return $db;
    }

    public function getPostId($id)
    {
        $model = new Post_Model();
        $sql = $model::GET_All_POSTS_ID;
        $info = array('Post_ID'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }



    public function InsertPost($info)
    {


        $model = new Post_Model();

        $sql = $model::INSERT_TO_POSTS_TABLE;

        $db = $this->insert($sql,$info);
        return$db;

    }

    public  function deletePost($id)
    {
        $model = new Post_Model();
        $sql = $model::DELETE_CATEGORIES_DATA;
        $info = array('cat_id'=>$id);
        $db =$this->delete($sql,$info);
        return $db;
    }



    public function UpdatePost($id)
    {
        $model = new Post_Model();
        $sql = $model::UPDATE_CATEGORIES_ID;

        $db = $this->select($sql,$id);
        return $db;
    }

}