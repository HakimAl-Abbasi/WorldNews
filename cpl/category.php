<?php
include "classes/DB.class.php";
include 'Controler/Post.cont.php';
include 'Model/Posts.mod.php';



$cat = new post();
$catId = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;



$in_data =' <div class="alert alert-primary" role="alert">data inserted</div>';
$ino_data =' <div class="alert alert-danger" role="alert">not insert</div>';


if(isset($_POST['dd'])){


    $PName =rand(1000,10000).$_FILES['PImg']['name'];
    $TName = $_FILES['PImg']['tmp_name'];
    $upload_dir='Data/upload';



    move_uploaded_file($TName,'$upload_dir');


    $PTile          =$_POST['PTitle'];
    $PIntro         =$_POST['PIntro'];
    $PtContent      =$_POST['PContent'];
    $PImg           = $TName.$upload_dir.$PName;
    #$PAu           =$_POST['PAu'];
    $CDate          =$_POST['CDate '];
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

?>



<div class="container">
    <form action="Data/upload/file_upload.php" method="post" enctype="multipart/form-data" class="">
        <div class="form-group">
            <label for="PTitle"> Post Title</label>
            <input type="text" class="form-control"  id="PTitle " name ="PTitle" placeholder="Enter Post Title Name">

        </div>
        <div class="form-group">
            <label for="PIntros">Post Intro </label>

            <textarea type="text" name="PIntro"></textarea>

        </div>
        <div class="form-group">
            <label for="PContent">Post Content </label>

            <textarea type="text" name="PContent"></textarea>

        </div>

        <div class="form-group">

            <input type="file" class="form-control"    name ="PImg"  Value="Upload Files">

        </div>

        <div class="form-group">
            <label for="CDate">Created Date</label>
            <input type="date" class="form-control" name="CDate" >
        </div>
        <div class="form-group">
            <label for="UDate">Updated  date </label>
            <input type="Date"  name="UDate" class="form-control">
        </div>
        <div class="form-group">
            <label for="PDate">Posted date </label>
            <input type="Date"  name="PDate" class="form-control">
        </div>

        <div class="form-group">
            <label for="CId">Category</label>
            <input type="number"  name="CId" class="form-control">
        </div><div class="form-group">
            <label for="PStatus">Post Status </label>
            <input type="number" name="PStatus" class="form-control">
        </div>






        <input type="submit" name="dd" class="btn btn-primary" value="Insert">
    </form>
</div>
