<?php

include '../../classes/DB.class.php';
include '../../Controler/Post.cont.php';
include "../../Model/Posts.mod.php";


$cat = new post();
$catId = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;

$in_data =' <div class="alert alert-primary" role="alert">data inserted</div>';
$ino_data =' <div class="alert alert-danger" role="alert">not insert</div>';

if(isset($_POST['dd'])){



$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES["PImg"]["name"]);




move_uploaded_file($_FILES["PImg"]["tmp_name"],$target_file);


$PTile          =$_POST['PTitle'];
$PIntro         =$_POST['PIntro'];
$PtContent      =$_POST['PContent'];
$PImg           = $target_file    ;
#$PAu           =$_POST['PAu'];
$CDate          =$_POST['CDate'];
$UDate          =$_POST['UDate'];
$PDate          =$_POST['PDate'];
$CId            =$_POST['CId'];
$PStatus        =$_POST['PStatus'];


$info = [

'Post_Title'            =>$PTile,
'Post_Intro'            =>$PIntro,
'Post_Content'          =>$PtContent,
'Post_img'              =>$PImg,
#'Create_by'             =>$PAu,
'Create_Date'           => $CDate,
'Updates_date'          => $UDate,
'Publish_Date'          =>$PDate,
'cat_id'                =>$CId,
'Post_Status'           =>$PStatus



];






$cat->InsertPost($info);

echo $in_data;
}

else {
echo $ino_data;
}















