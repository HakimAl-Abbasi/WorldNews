<?php
class Posts extends DB
{
    public  function getAllPosts()
    {
        $sql ='SELECT * FROM posts WHERE Post_Id = ?';

        $db = $this->select($sql,array(1));

        return $db;
    }
}