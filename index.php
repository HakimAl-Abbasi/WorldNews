<?php
@include('ini.php');
@include($temp.$h);
@include($temp.$n);
// controller Files
include 'cpl/Controler/Post.cont.php';
//include 'cpl/Controler/categories.cont.php';
// Models Files
include 'cpl/Model/Posts.mod.php';
//include 'cpl/Model/categoreis.mod.php';
$Category = new categories();
$Post = new post();
?>



<div class=" bg-news  text-white rounded bg-dark">
    <div class="  col-md-6 px-0 mt-5 mr-auto" style="padding-top:20px;padding-top:250px; margin-left:40px;">
        <p class="display-7 font-italic Breaking">Breaking News </p>
        <marquee>
            <?php
           foreach ($Post->GetAllPost() as $p) {
               ?>
               <a href="" class="lead my-n1 " style="padding-top:-800px;"><?php echo $p['Post_Title']; ?></a>

               <?php
           }
            ?>

        </marquee>

    </div>

</div>

<div class="container">
<div class="row mt-5">

  <div class="col-lg-4 float-left ">

      <div  class="container">
          <!--
        <div class="form-group">
            <label class="btn btn-danger">Search</label>
            <input type="search" class="form-control col-sm-4" name="search" placeholder="البحث ...">
        </div>
            -->
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                  <span class="btn btn-danger" id="inputGroup-sizing-sm">Search</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="">
              <h4>Categories</h4>
          </div>
      </div>

  </div>
    <div class="col-md-8 float-left text-right" >
    <div  class="container">
        <?php

        $PId = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;

        foreach ($Post->GetAllPost()as $ptId) {

            ?>
            <ul style="list-style: none">
                <li><h1><?php echo $ptId['Post_Title']; ?></h1></li>
                <li><img src="cpl/Data/upload/<?php echo $ptId['Post_img']; ?>" height="300px" width="400px"></li>
                <li><h5><?php echo $ptId['Post_Title']; ?></h5></li>
                <li><?php echo $ptId['Post_Intro']; ?></li>
                <li><?php echo $ptId['Publish_Date']; ?></li>

            </ul>


            <?php
        }
        ?>
    </div>


</div>
</div>
</div>
</div>

<

<?php
@include($temp.$s);
@include($temp.$f);

?>
