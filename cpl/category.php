<?php
include "classes/DB.class.php";
include 'Controler/Post.cont.php';
include 'Model/Posts.mod.php';



$cat = new post();
$catId = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;

foreach ($cat->GetAllPost()as $cati)
{
    print_r($cati) ;
}