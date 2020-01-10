<?php
include 'includes/header-nav.php';;
include "../classes/DB.class.php";
include'../Controler/User.cont.php';



$do =isset($_GET['do'])?$_GET['do']:'Manage';

// start mange page
if($do == 'Manage'){?>
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
                                <a href="manage-users.php?do=addNew" class="btn btn-info fa fa-plus-square float-right"> Add New User</a>

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

                                        $an =" not Active";

                                        $Status = $users['User_Status']= $an;

                                    }

                                    if($Group_Id = $users['User_GroupID'] == "7")
                                    {
                                        $admin ='admin';
                                        $Group_Id = $users['User_GroupID'] = $admin;

                                    }
                                    else if($Group_Id = $users['User_GroupID'] == "8")
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
                                                    <td> <a href="manage-users.php?do=Edit&userid=<?php echo $User_id?>" class="btn btn-info fa fa-edit"></a></td>
                                                    <td> <a href="manage-users.php?do=delete&userid=<?php echo $User_id?>" class="btn btn-danger fa fa-trash-o"></a></td>
                                                    <td> <a href="#"  class="btn btn-success fa fa-adn"></a></td>

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
<?php
}


// add new user
elseif ($do =='addNew') {



    if (isset($_POST['ADD']))
    {


        $info = [

            'Username' => $_POST['FName'],
            'User_Email' => $_POST['Email'],
            'Password' => sha1($_POST['PDW']),
            'Full_Name' => $_POST['FullName'],
            'User_Phone' => $_POST['Phone'],
            'Register_Date' => $_POST['RegisterDate'],
            'User_GroupID' => $_POST['typeUser'],
            'User_Status' => $_POST['Status']
        ];
        $inserts = new User();

        $inserts->InsertIntoUser($info);





   }
    ?>
<!-- start form  -->







    <div class="container">


        <div class="mt-4"><h3> Add New User</h3></div>
        <div>
            <a href="manage-users.php" class="btn btn-outline-info fa fa-back">Back</a>
        </div>
        <form action="" method="post" class="mt-5">
            <div class="form-group">
                <label for="FName">Name</label>
                <input type="text" class="form-control" name="FName" placeholder="Enter Your Name" autocomplete="off">

            </div>
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" name="Email"
                       placeholder="Enter email" autocomplete="off">
                <div>
                    <div class="form-group">
                        <label for="PDW">Password</label>
                        <input type="password" class="form-control" name ="PDW" placeholder="Password" autocomplete="no-password">
                    </div>
                    <div class="form-group">
                        <label for="FullName">Full Name</label>
                        <input type="text" class="form-control" name="FullName" placeholder="Full Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Phone">User Phone</label>
                        <input type="text" class="form-control" name ="Phone" placeholder="Phone" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="RegisterDate">Register Date </label>
                        <input type="date"  class="form-control" name="RegisterDate">
                    </div>

                    <div class="form-group">
                        <label for="typeUser">Type User</label>
                        <input type="number" name="typeUser" class="form-control" placeholder="Stats number" ">
                    </div>

                    <div class="form-group">
                        <label for="Status">Type Status</label>
                        <input type="number" name="Status" class="form-control" placeholder="Stats number" ">
                    </div>




                    <input type="submit" name="ADD"class="btn btn-primary mt-4" value="insert">
        </form>

    </div>














 <!-- end form -->



    <?php
}



//  edit user information
elseif ($do =='Edit')
{
    $user_id = isset($_GET['User_ID']) && is_numeric($_GET['User_ID'])? intval($_GET['User_ID']):0;

        $edit = new User();
        foreach ($edit->getUsersId($_GET['userid']) as $item) {
            $username = $item['Username'];
            $userEmail = $item['User_Email'];
            $fullUserN = $item['Full_Name'];
            $userPhone = $item['User_Phone'];
            $registerUs = $item['Register_Date'];
            $userGroup = $item['User_GroupID'];
            $userStatus = $item['User_Status'];

            if ($userGroup = $item['User_GroupID'] == "7") {
                $admin = 'admin';
                $userGroup = $users['User_GroupID'] = $admin;

            } else if ($userGroup = $item['User_GroupID'] == "8") {
                $u = 'user';
                $userGroup = $item['User_GroupID'] = $u;
            }

            ?>

            <div class="container">


                <div class="mt-4"><h3> Edit User</h3></div>
                <form action="" method="post" class="mt-5">
                    <div class="form-group">
                        <label for="FName">Name</label>
                        <input type="text" class="form-control" aria-describedby="FName"
                               value="<?php echo $username ?>">

                    </div>
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                               value="<?php echo $userEmail; ?>">
                        <div>
                            <div class="form-group">
                                <label for="PDW">Password</label>
                                <input type="password" class="form-control" id="PDW" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="FullName">Full Name</label>
                                <input type="text" class="form-control" id="FullName" value="<?php echo $fullUserN; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Phone">User Phone</label>
                                <input type="text" class="form-control" id="Phone" value="<?php echo $userPhone; ?>">
                            </div>
                            <div class="form-group">
                                <label for="RegisterDate">Register Date </label>
                                <input type="date" class="form-control" value="<?php echo $registerUs; ?>">
                            </div>

                            <div class="form-group">

                                <select class="form-control">


                                    <option value="Admin" <?php if ($userGroup == 'admin') echo 'selected'; ?>>Admin
                                    </option>
                                    <option value="User" <?php if ($userGroup == 'user') echo 'selected'; ?>>User
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">

                                <select class="form-control">


                                    <option value="Active" <?php if ($userStatus == 'Active') echo 'selected'; ?>>
                                        Active
                                    </option>
                                    <option value="NotActive" <?php if ($userStatus == 'NotActive') echo 'selected'; ?>>
                                        Not Active
                                    </option>
                                </select>
                            </div>


                            <a href="manage-users.php?Update&userid=<?php echo $user_id ?>" type="submit"
                               class="btn btn-primary mt-4">Save</a>
                </form>

            </div>


            <?php

                }
}

elseif ($do == 'Update')
{
    $info = [

        'Username' => $_POST['FName'],
        'User_Email' => $_POST['create_by'],
        'Password' => $_POST['create_date'],
        'Full_Name' => $_POST['update_date'],
        'User_phone' => $_POST['category_status'],
        'Register_Date' => $_POST['parent'],
        'User_GroupID' => $_POST['Select_name'],
        'User_Status' => $_POST['Status']


    ];
    $update = new User();
    $update->UpdateUser( $info);
}

elseif ($do == 'delete')
{
    $UserId = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
    $in_data =' <div class="alert alert-primary" role="alert">data deleted</div>';

    $del = new User();

    $del->deleteUser($UserId);
    echo $in_data;

}
else{
    $ino_data =' <div class="alert alert-danger" role="alert">not data deleted</div>';
    echo  $ino_data;
}
?>








<?php include'includes/footer.php';?>
