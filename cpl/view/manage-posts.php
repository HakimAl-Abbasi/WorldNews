<?php
include 'includes/header-nav.php';;
include "../classes/DB.class.php";
include'../Controler/Post.Cont.php';



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
                                <a href="manage-cat.php?do=addNew" class="btn btn-info fa fa-edit float-right">Add New User</a>

                                <thead>
                                <tr>
                                    <th>#</th>

                                    <th>&ensp;&ensp; المنشور</th>
                                    <th>المقدمة </th>

                                    <th>المحتوى</th>
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

                                $posts = new post();
                                foreach ($posts->getAllPosts() as $Posts) {
                                    // variables
                                    $PostID = $Posts['Post_ID'];
                                    $PostTitle = $Posts['Post_Title'];
                                    $PostIntro = $Posts['Post_Intro'];
                                    $PostContent = $Posts['Post_Content'];
                                    $PostImage = $Posts['Post_img'];
                                    $CreateBy = $Posts['Create_by'];
                                    $CreateDate =$Posts['Create_Date'];
                                    $UpdatesDate =$Posts['Updates_date'];
                                    $PublishDate =$Posts['Publish_Date'];
                                    $CatID       =$Posts['cat_id'];
                                    $PostStatus  =$Posts['Post_Status'];

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
                                        <td align="center"><?php echo $PostIntro; ?></td>
                                        <td align="center"><?php echo $PostContent; ?></td>
                                        <td align="center"><?php echo $PostImage; ?></td>
                                        <td align="center"><?php echo $CreateBy; ?></td>
                                        <td align="center"><?php echo $CreateDate; ?></td>
                                        <td align="center"><?php echo $UpdatesDate; ?></td>
                                        <td align="center"><?php echo $PublishDate; ?></td>
                                        <td align="center"><?php echo $CatID; ?></td>
                                        <td align="center"><?php echo $PostStatus; ?></td>

                                        <?php



                                        ?>
                                        <td>
                                            <table>
                                                <tr>
                                            <td><a href="manage-posts.php?do=Edit&postid=<?php echo $PostID ?>" name="Edit"
                                                                             class="btn btn-info  fa fa-edit"> Edit</a></td>
                                           <td> <a href="manage-posts.php?do=delete&postid=<?php echo $PostID ?>"
                                                   name=" delete" class="btn btn-danger fa fa-trash-o"> Delete</a></td>
                                           <td><a href="manage-posts.php?do=Update&postid=<?php echo $PostID  ?>" class="btn btn-success fa fa-adn">
                                                   Active</a></td>
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

    ?>

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


}
?>
































<?php include'includes/footer.php';?>
