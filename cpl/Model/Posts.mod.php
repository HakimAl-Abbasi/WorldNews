<?php
class Post_Model
{


    const  GET_ALL_POSTS = "SELECT * FROM posts";
    const  GET_ACTIVE_POSTS = "SELECT * FROM posts WHERE Post_Status =1";
    const  GET_NOT_ACTIVE_POSTS = "SELECT * FROM posts WHERE Post_Status =-1";
    const  GET_All_POSTS_ID = "SELECT * FROM posts WHERE cat_id =cat_id";
    const  GET_All_POSTS_PID = "SELECT Post_Title,Post_Intro,Post_img , Publish_Date FROM posts WHERE cat_id =cat_id";
    //const GET_ALL_CATEGORIES_MAIN_PARENT ='SELECT Cat_name ,cat_id FROM categories WHERE parent =0 AND  cat_id = cat_id';


    const  CHECK_POSTS = "SELECT * FROM posts WHERE Post_Title =:Post_Title";
    const  GET_PARENT_POSTS = "SELECT *  FROM posts  WHERE parent = 0";
    const  GET_PARENT_ACTIVE_POSTS = "SELECT *  FROM posts  WHERE parent = 0 AND Post_Status=1";
    const  GET_PARENT_NOT_ACTIVE_POSTS = "SELECT *  FROM posts  WHERE parent = 0 AND Post_Status=-1";

    const  GET_NAME_POSTS_BY_ID_CAT = "SELECT cat_name FROM posts WHERE Post_ID=:Post_ID";

    const  GET_CHILD_POSTS = "SELECT *  FROM posts  WHERE parent =:Post_ID ";
    const  GET_CHILD_ACTIVE_POSTS = "SELECT *  FROM posts  WHERE parent =:Post_ID AND Post_Status=1 ";
    const  GET_CHILD_NOT_ACTIVE_POSTS = "SELECT *  FROM posts  WHERE parent =:Post_ID AND Post_Status=-1 ";
    const  GET_DATA_POSTS  = "SELECT *  FROM posts  WHERE Post_ID =:Post_ID ";



    const  INSERT_TO_POSTS_TABLE = "INSERT INTO posts
                                            (
                                            Post_Title,
                                            Post_Intro,
                                            Post_Content,
                                            Post_img,
                                          
                                            Create_Date,
                                            Updates_date,
                                            Publish_Date,
                                            cat_id,
                                            Post_Status
                                            ) 
                                         VALUES 
                                             (
                                             :Post_Title,
                                             :Post_Intro,
                                             :Post_Content,
                                             :Post_img,
                                        
                                             :Create_Date,
                                             :Updates_date,
                                             :Publish_Date,
                                             :cat_id,
                                             :Post_Status
                                             )";

    const  UPDATE_POSTS="UPDATE posts
                      SET
                      Post_Title             =:Post_Title,
                      Post_Intro             =:Post_Intro,
                      Post_Content           =:Post_Content,
                      Post_img               =:Post_img,
                      Create_by              =:Create_by,
                      Create_Date            =:Create_Date,
                      Updates_date           =:Updates_date,
                      cat_id                 =:cat_id,
                      Publish_Date           =:Publish_Date,
                      Post_Status            =:Post_Status
                      WHERE
                      Post_ID =:Post_ID";



    const DELETE_POSTS ="DELETE FROM posts WHERE Post_ID	 =:Post_ID	";

    const ACTIVATE_POSTS = "UPDATE posts SET cat_status = 1 WHERE Post_ID=:Post_ID	";




    public $PostID =":Post_ID";
    public $PostTitle =":Post_Title";
    public $cat_description = ":at_description";
    public $cat_status = ":status";
    public $create_by =":createBy";
    public $create_date = ":dateNow";
    public $updates =":updates";
    public $parent =":parent";
    public $ordering =":ordering";
    public $allow_ads = ":allow_ads";
    public $allow_comments =":allow_comments";




}