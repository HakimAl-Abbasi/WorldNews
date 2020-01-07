<?php
include 'includes/header-nav.php';;
include "../classes/DB.class.php";
include'../Controler/User.cont.php';
?>

        <!-- Table Users -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ادارة المستخدمين</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">

            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped  table-bordered">
                                    <a href="add-new-us.php" class="btn btn-info fa fa-edit float-right">Add New User</a>

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th align="center">Name</th>
                                            <th align="center">Email</th>
                                            <th align="center">password</th>
                                            <th align="center">Full Name </th>
                                            <th align="center">User Phone </th>
                                            <th align="center">Register Date</th>
                                            <th align="center">User GroupID</th>
                                            <th align="center">User Status</th>
                                            <th align="center">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $user = new User();
                                    foreach ($user->getAllUsers() as $users) {
                                                $User_id = $users['User_ID'];
                                                $User_Name = $users['Username'];
                                                $User_Email = $users['User_Email'];
                                                $User_pass =$users['Password'];
                                                $fullName = $users['Full_Name'];
                                                $User_Phone =$users['User_Phone'];
                                                $Register_date =$users['Register_Date'];
                                                $Group_Id = $users['User_GroupID'];
                                                if( $Status = $users['User_Status']>0)
                                                {
                                                    $active="Active";

                                                    $Status = $users['User_Status']= $active;


                                                }
                                                else
                                                {

                                                    $an ="Active";

                                                    $Status = $users['User_Status']= $an;

                                                }

                                                if($Group_Id = $users['User_GroupID']>0)
                                                {
                                                    $admin ='admin';
                                                    $Group_Id = $users['User_GroupID'] = $admin;

                                                }
                                                else
                                                {
                                                    $u ='user';
                                                    $Group_Id = $users['User_GroupID'] = $u;
                                                }



                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $User_id;?></td>
                                            <td align="center"><?php echo $User_Name;?></td>
                                            <td align="center"><?php echo $User_Email;?></td>
                                            <td align="center"><?php echo $User_pass;?></td>
                                            <td align="center"><?php echo $fullName;?></td>
                                            <td align="center"><?php echo $User_Phone;?></td>
                                            <td align="center"><?php echo $Register_date;?></td>
                                            <td align="center"><?php echo $Group_Id;?></td>
                                            <td align="center"><?php echo $Status;?></td>
                                            <td align="center">
                                                <table>
                                                    <tr>
                                                        <td> <a href="#" class="btn btn-info fa fa-edit">Edit</a></td>
                                                        <td> <a href="#" class="btn btn-danger fa fa-trash-o"> Delete</a></td>
                                                       <td> <a href="#"  class="btn btn-success fa fa-adn"> Active</a></td>

                                                    </tr>
                                                </table>

                                            </td>

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
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include'includes/footer.php';?>
