<?php
include 'includes/header-nav.php';
include "../classes/DB.class.php";
include'../Controler/categories.cont.php';

//include '../Model/categoreis.mod.php';





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


    echo ' <div class="alert alert-primary" role="alert">data inserted</div>';
}

else {

    ?>
    <div class="alert alert-danger" role="alert"><?php echo "not insert" ?></div>
    <?php
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
            <label for="create_by">Create By</label>
            <input type="text" class="form-control" name="create_by" placeholder="Created By Name">
        </div>
        <div class="form-group">
            <label for="CD">Create date </label>
            <input type="Date"  name="create_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="PDW">Update  date </label>
            <input type="Date" name="update_date" class="form-control">
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







<?php include'includes/footer.php';?>
