<?php
include ('includes/loader.inc.php');
include ('Controler/User.cont.php');




/*
$posts = new Posts();


foreach ($posts->getAllPosts() as $data )
{

        $post_title   =$data['Post_Title'];
        $image_post   =base64_encode($data['Post_img']);
        $post_intro   =$data['Post_Intro'];
        $post_content =$data['Post_Content'];



    ?>





    <ul>

        <li><?php echo $post_title; ?></li>
        <li><img src="<?php echo $image_post;?>" </li>
        <li><?php echo $post_intro; ?></li>
        <li><?php echo $post_content; ?></li>




    </ul>

<?php
} */
?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="view/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="view/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="view/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="view/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.php">
                   Login Form
                </a>
            </div>
            <div class="login-form">
                <form action="view/index.php" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                   <!-- <div class="social-login-content">
                        <div class="social-button">
                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                        </div>
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
</div>



<?php

include'view/includes/footer.php';

?>
