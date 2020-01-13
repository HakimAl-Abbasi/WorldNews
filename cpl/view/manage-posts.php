<?php
include 'includes/header-nav.php';
//include '../includes/loader.inc.php';
//include '../includes/loderCon.inc.php';
include "../classes/DB.class.php";
include '../Controler/Post.cont.php';
//include 'cpl/Controler/categories.cont.php';

$posts = new post();

$do =isset($_GET['do'])?$_GET['do']:'Manage';

if($do == 'Manage') {
    ?>


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1> ادارة المنشورات</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <a href="manage-posts.php?do=addNew" class="btn btn-info fa fa-edit float-right">Add New
                                    User</a>

                                <thead>
                                <tr>
                                    <th>#</th>

                                    <th>&ensp;&ensp; المنشور</th>



                                    <th>صورة المحتوى</th>
                                    <th>الكاتب</th>
                                    <th>تاريخ الانشاء</th>
                                    <th>تاريخ التحديث</th>
                                    <th>تاريخ النشر</th>
                                    <th>القسم</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php


                                foreach ($posts->getAllPosts() as $Posts) {
                                    // variables
                                    $PostID = $Posts['Post_ID'];
                                    $PostTitle = $Posts['Post_Title'];
                                    $PostIntro = $Posts['Post_Intro'];
                                    $PostContent = $Posts['Post_Content'];
                                    $PostImage = $Posts['Post_img'];
                                    $CreateBy = $Posts['Create_by'] = $_SESSION['username'];
                                    $CreateDate = $Posts['Create_Date'];
                                    $UpdatesDate = $Posts['Updates_date'];
                                    $PublishDate = $Posts['Publish_Date'];
                                    $CatID = $Posts['cat_id'];
                                    $PostStatus = $Posts['Post_Status'];

                                    if ($PostStatus = $Posts['Post_Status'] > 0) {


                                        $active = "Active";

                                        $PostStatus = $Posts['Post_Status'] = $active;


                                    } else {

                                        $an = "not Active";

                                        $Status = $Posts['Post_Status'] = $an;

                                    }
                                    /*
                                if ($cStatus  > 0) {
                                    $admin = 'فرعي';
                                    $cStatus = $categories['parent'] = $admin;

                                } else {
                                    $u = 'رئيسي';
                                    $cStatus = $categories['parent'] = $u;
                                }
*/

                                    ?>
                                    <tr>
                                        <td align="center"><?php echo $PostID; ?></td>
                                        <td align="center"><?php echo $PostTitle; ?></td>
                                        <!--<td align="center"><?php #echo $PostIntro; ?></td>
                                        <td align="center"><?php #echo $PostContent; ?></td>-->
                                        <td align="center"><img src="../Data/upload/uploads/<?php echo $PostImage;?>"></td>
                                        <td align="center"><?php echo $CreateBy; ?></td>
                                        <td align="center"><?php echo $CreateDate; ?></td>
                                        <td align="center"><?php echo $UpdatesDate; ?></td>
                                        <td align="center"><?php echo $PublishDate; ?></td>
                                        <td align="center"><?php echo $CatID; ?></td>
                                        <td align="center"><?php echo $PostStatus; ?></td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <a href="manage-posts.php?do=Edit&postid=<?php echo $PostID ?>" name="Edit" class="btn btn-info  fa fa-edit"></a>
                                                    </td>
                                                    <td>

                                                         <a href="manage-posts.php?do=delete&postid=<?php echo $PostID ?>" name=" delete" class="btn btn-danger fa fa-trash-o">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>




                                    </tr>

                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div><!-- .animated -->
    </div><!-- .content -->


    </div>
    </div>


    <?php
}

    elseif ($do =='addNew') {

        $cat = new post();
        $catId = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;



        $in_data =' <div class="alert alert-primary" role="alert">data inserted</div>';
        $ino_data =' <div class="alert alert-danger" role="alert">not insert</div>';


        if(isset($_POST['dd'])){


            $PName =rand(1000,10000).$_FILES['PImg']['name'];
            $TName = $_FILES['PImg']['tmp_name'];
            $upload_dir='Data/upload/uploads/';



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
            <div>
           <!-- <a href="manage-posts.php" class="btn btn-outline-info fa fa-back">Back</a>-->
        </div>
            <form action="../Data/upload/file_upload.php" method="post" enctype="multipart/form-data" class="">
                <div class="form-group">
                    <label for="PTitle"> Post Title</label>
                    <input type="text" class="form-control"  id="PTitle " name ="PTitle" placeholder="Enter Post Title Name">

                </div>
                <div class="form-group">
                    <label for="PIntros">Post Intro </label>

                    <textarea type="text"   class="form-control" name="PIntro"></textarea>

                </div>
                <div class="form-group">
                    <label for="PContent">Post Content </label>

                    <textarea type="text" class="form-control" name="PContent"></textarea>

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

    <?php
}

elseif ($do =='Edit') {
    $user_id = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;
    ?>

    <?php
}
elseif ($do =='Update') {
    ?>

    <?php
}
elseif ($do =='Delete') {
    $user_id = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;


$posts->deletePost($user_id);

}
?>
































<?php include'includes/footer.php';?>
