<?php
include 'includes/header-nav.php';
include "../classes/DB.class.php";
include'../Controler/categories.cont.php';







    if(isset($_GET['do']) == 'Edit'){

//

$cat = new categories();

foreach ($cat->getAllCategoryId($_GET['id']) as $catData)

    $cat_id = $catData['cat_id'];

{


    ?>


    <div class="container">
        <div>
            <a href="manage-cat.php" class="btn btn-outline-info fa fa-back">Back</a>
        </div>
        <form action="" method="Post">
            <div class="form-group">
                <label for="CName"> Category Name</label>
                <input type="text" class="form-control" id="Cat_Name" value="<?php echo $cat_id?>">

            </div>
            <div class="form-group">
                <label for="create_by">Create By</label>
                <input type="text" class="form-control" name="create_by" placeholder="Created By Name">
            </div>
            <div class="form-group">
                <label for="CD">Create date </label>
                <input type="Date" name="create_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="PDW">Update date </label>
                <input type="Date" name="update_date" class="form-control">
            </div>

            <div class="form-group">
                <label for="PDW">Category Status </label>
                <input type="number" name="category_status" class="form-control">
            </div>
            <div class="form-group">
                <label for="PDW">parent </label>
                <input type="number" name="parent" class="form-control">
            </div>


            <input type="submit" name="update" class="btn btn-primary" value="update">
        </form>

    </div>
    <?php
}
}

?>



















<?php include 'includes/footer.php'; ?>
