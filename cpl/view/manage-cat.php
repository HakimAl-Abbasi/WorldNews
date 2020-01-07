<?php
include 'includes/header-nav.php';
include "../classes/DB.class.php";
include'../Controler/categories.cont.php';



?>







<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1> ادارة الاقسام</h1>
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
                            <a href="add-new-cat.php" class="btn btn-info fa fa-edit float-right">Add New User</a>

                            <thead>
                            <tr>
                                <th>#</th>

                                <th>&ensp;&ensp;Name</th>
                                <th>&ensp;&ensp;Created By</th>
                                <th>&ensp;&ensp;&ensp;Started Time</th>
                                <th>&ensp;&ensp;&ensp;Update Time</th>
                                <th>Type category</th>
                                <th>Status</th>
                                <th> &ensp; &ensp;  &ensp; &ensp; &ensp;    &ensp;&ensp;Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $category = new categories();
                            foreach ($category->getAllCategory() as $categories) {
                                // variables
                                $cat_id = $categories['cat_id'];
                                $cat_name = $categories['Ca_name'];
                                $created_by = $categories['create_by'];
                                $created_date = $categories['create_date'];
                                $update_date = $categories['updates'];


                                if ($Status = $categories['create_status'] > 0) {


                                    $active = "Active";

                                    $Status = $categories['create_status'] = $active;


                                } else {

                                    $an = "not Active";

                                    $Status = $categories['create_status'] = $an;

                                }

                                if ($cStatus = $categories['parent'] > 0) {
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
                                    <td align="center"><?php echo $created_by; ?></td>
                                    <td align="center"><?php echo $created_date; ?></td>
                                    <td align="center"><?php echo $update_date; ?></td>
                                    <td align="center"><?php echo $cStatus; ?></td>
                                    <td align="center"><?php echo $Status; ?></td>

                                                    <?php

                                                    if (isset($_GET['do'])=='delete')
                                                    {
                                                        $id = $_GET['cat_id'];

                                                        $del = new categories();

                                                      $del->deleteCategory( $id );
                                                    }
                                                        elseif (isset($_GET['Eid'])=='Edit')
                                                        {
                                                            $id =$categories['cat_id'];
                                                            foreach ($category->getAllCategoryId($id) as $cat)
                                                            {
                                                                $cat_id = $cat= $id;

                                                            }


                                                        }

                                                    ?>
                                                <td>
                                                    <a href="edit-cat.php?do=Edit&id=<?php echo $cat_id ?>" name="Edit" class="btn btn-info  fa fa-edit"> Edit</a>
                                                    <a href="manage-cat.php?do=delete&cat_id=<?php echo $cat_id?>" name =" delete"  class="btn btn-danger fa fa-trash-o"> Delete</a>
                                                    <a href="manage-cat.php?<?php ?>" class="btn btn-success fa fa-adn" > Active</a>
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
/*
if(isset($_POST['dd'])){
    $info = [

        'Ca_name'          =>$_POST['Cat_Name'],
        'create_by'        =>$_POST['create_by'],
        'create_date'      =>$_POST['create_date'],
        'updates'          =>$_POST['update_date'],
        'create_status'    =>$_POST['category_status'],
        'parent'           =>$_POST['parent']



    ];


    $inserts = new categories();
    $inserts->InsertIntoCategories($info);
}*/
?>

<?php include'includes/footer.php';?>
