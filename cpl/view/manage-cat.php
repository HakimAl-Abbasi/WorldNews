<?php
include 'includes/header-nav.php';
include "../classes/DB.class.php";
include'../Controler/categories.cont.php';

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

                                    <th>&ensp;&ensp;Name</th>
                                    <th>&ensp;&ensp;Updated By</th>

                                    <th>&ensp;&ensp;&ensp;Update date</th>
                                    <th>Type category</th>
                                    <th>Status</th>
                                    <th> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp;Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $category = new categories();
                                foreach ($category->getAllCategory() as $categories) {
                                    // variables
                                    $cat_id = $categories['cat_id'];
                                    $cat_name = $categories['Cat_name'];
                                    $updated_by = $categories['updated_by'];
                                    $updated_date = $categories['update_date'];
                                    $Status = $categories['category_status'];
                                    $cStatus = $categories['parent'];

                                    if ($Status = $categories['category_status'] > 0) {


                                        $active = "Active";

                                        $Status = $categories['category_status'] = $active;


                                    } else {

                                        $an = "not Active";

                                        $Status = $categories['category_status'] = $an;

                                    }

                                    if ($cStatus  > 0) {
                                        $admin = 'فرعي';
                                        $cStatus = $categories['parent'] = $admin;

                                    } else {
                                        $u = 'رئيسي';
                                        $cStatus = $categories['parent'] = $u;
                                    }


                                    ?>
                                    <tr>
                                        <td align="center"><?php echo $cat_id; ?></td>
                                        <td align="center"><?php echo $cat_name; ?></td>
                                        <td align="center"><?php echo $updated_by; ?></td>
                                        <td align="center"><?php echo $updated_date; ?></td>
                                        <td align="center"><?php echo $cStatus; ?></td>
                                        <td align="center"><?php echo $Status; ?></td>

                                        <?php



                                        ?>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="manage-cat.php?do=Edit&catid=<?php echo $cat_id ?>" name="Edit"
                                               class="btn btn-info  fa fa-edit"> Edit</a>
                                            <a href="manage-cat.php?do=delete&catid=<?php echo $cat_id ?>"
                                               name=" delete" class="btn btn-danger fa fa-trash-o"> Delete</a>
                                            <a href="manage-cat.php?do=Update&catid=<?php echo $cat_id  ?>" class="btn btn-success fa fa-adn">
                                                Active</a>
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


    <!-- modal- create new category-->

    <!-- Button trigger modal -->

    <?php



}
elseif ($do =='addNew') {

    $in_data =' <div class="alert alert-primary" role="alert">data inserted</div>';
    $ino_data =' <div class="alert alert-danger" role="alert">not insert</div>';

    if(isset($_POST['dd'])){
        $info = [

            'Cat_name'          =>$_POST['Cat_Name'],
            'updated_by'        =>$_POST['create_by'],
            'update_date'      =>$_POST['create_date'],
            'category_status'    =>$_POST['category_status'],
            'parent'           =>$_POST['parent']



        ];


        $category = new categories();
        $category->InsertIntoCategories($info);


        echo $in_data;
    }

    else {
        echo $ino_data;
    }

    ?>



    <div class="container">
        <div>
            <a href="manage-cat.php" class="btn btn-outline-info fa fa-back">Back</a>
        </div>
        <form action="" method="Post">
            <div class="form-group">
                <label for="CName"> Category Name</label>
                <input type="text" class="form-control"  id="Cat_Name " name ="Cat_Name" placeholder="Enter Category Name">

            </div>
            <div class="form-group">
                <label for="create_by">Updated By</label>
                <input type="text" class="form-control" name="create_by" placeholder="Created By Name">
            </div>
            <div class="form-group">
                <label for="CD">Updated  date </label>
                <input type="Date"  name="create_date" class="form-control">
            </div>

            <div class="form-group">
                <label for="PDW">Category Status </label>
                <input type="number"  name="category_status" class="form-control">
            </div><div class="form-group">
                <label for="PDW">parent </label>
                <input type="number" name="parent" class="form-control">
            </div>






            <input type="submit" name="dd" class="btn btn-primary" value="Insert">
        </form>

    </div>




















    <?php
}
elseif ($do =='Edit')
{
    $categoryS = new categories();
    $cat_id = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0;
    foreach ($categoryS->getCategoryId($cat_id) as $cats) {
        $catName = $cats['Cat_name'];
        $updatedBy = $cats['updated_by'];
        $updatedDate = $cats['update_date'];
        $categoryStatus = $cats['category_status'];
        $parent = $cats['parent'];

        if ($categoryStatus = 0) {


            $active = "Active";

            $categoryStatus = $cats['category_status'] = $active;


        } else {

            $an = "not Active";

            $categoryStatus = $cats['category_status'] = $an;

        }
        if ($parent = 0) {
            $admin = 'فرعي';
            $parent = $cat['parent'] = $admin;

        } else {
            $u = 'رئيسي';
            $parent = $cats['parent'] = $u;
        }

        ?>
        <div class="container">
            <div>
                <a href="manage-cat.php" class="btn btn-outline-info fa fa-back">Back</a>
            </div>
            <form action="" method="Post">
                <div class="form-group">
                    <label for="CName"> Category Name</label>
                    <input type="text" class="form-control" id="Cat_Name " name="Cat_Name" value="">


                </div>
                <div class="form-group">
                    <label for="create_by">Updated By</label>
                    <input type="text" class="form-control" name="create_by" value="<?php echo $catName; ?>">
                </div>
                <div class="form-group">
                    <label for="CD">Updated date </label>
                    <input type="Date" name="create_date" class="form-control" value="<?php echo $updatedBy; ?>">
                </div>

                <div class="form-group">

                    <select class="form-control">


                        <option value="رئيسي" <?php if ($parent == 'رئيسي') echo 'selected'; ?>>رئيسي
                        </option>
                        <option value="فرعي" <?php if ($parent == 'فرعي') echo 'selected'; ?>>فرعي
                        </option>
                    </select>
                </div>
                <div class="form-group">

                    <select class="form-control">


                        <option value="Active" <?php if ($categoryStatus == 'Active') echo 'selected'; ?>>
                            Active
                        </option>
                        <option value="NotActive" <?php if ($categoryStatus == 'NotActive') echo 'selected'; ?>>
                            Not Active
                        </option>
                    </select>
                </div>


                <input type="submit" name="Update" class="btn btn-primary" value="Save">
            </form>

        </div>


        <?php
    }
}

elseif(isset($_GET['do']) == 'Update') {
    $cat_id = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0;

                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $info = [
                        'Cat_name'          =>$_POST['Cat_Name'],
                        'updated_by'        =>$_POST['create_by'],
                        'update_date'      =>$_POST['create_date'],
                        'category_status'    =>$_POST['category_status'],
                        'parent'           =>$_POST['parent']

                    ];


                    $del = new categories();

                    $del->UpdateCategory($info);

                }


}
elseif(isset($_GET['do']) == 'delete') {
    $cat_id = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0;


    $del = new categories();

    $del->deleteCategory($cat_id);

}
?>



<?php include'includes/footer.php';?>
