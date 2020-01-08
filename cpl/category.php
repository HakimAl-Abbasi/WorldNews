<?php
include "classes/DB.class.php";
include'Controler/User.cont.php';
include 'Model/User.mod.php';

/*


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





}*/

?>
<!--

<div class="container">


    <div class="mt-4"><h3> Add New User</h3></div>
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
-->