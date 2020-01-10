<?php
include "cpl/classes/DB.class.php";
include 'cpl/Controler/categories.cont.php';
include 'cpl/Model/categoreis.mod.php';

$cat = new categories();
foreach ($cat->getAllCategory() as $category) {
    ?>


    <!--<nav>
        <div class="nav-wrapper teal">
            <a href="#" class="brand-logo left">HMHNEWS</a>

            <ul class=" marnav right hide-on-med-and-down">

                <a href="#" class="right hide-on-large-only"><i class="fa fa-icons"></i></a>
                <li><a href="#">Home</a></li>
                <li><a href="#">Add Artical</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#"> Login</a></li>


            </ul>
        </div>


    </nav>-->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php">HmhNews</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="about.php">About </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">Contact </a>
              </li>-->
                <div class="move_login">
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger Login" href="#" data-toggle="modal"
                           data-target="#Login">Login</a>
                    </li>
                </div>
            </ul>

        </div>
    </nav>

    <?php
}
?>





<!-- Login Modal -->



<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Login">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <div class="form-row align-items-center">
                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Username</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Username</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" name="user" placeholder="Username">
                      </div>

                 <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Password</div>
                        </div>
                        <input type="Password" class="form-control" id="inlineFormInputGroup" name="pass" placeholder="Username">
                      </div>

                    </div><br><br>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-2">Login</button>
                    </div>
                  </div>
                </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


























