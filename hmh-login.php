<?php
@include('ini.php');
@include($temp.$lg);
include ('cpl/classes/DB.class.php');
include ('cpl/Controler/User.cont.php');
include ('cpl/Model/User.mod.php');

?>

<?php

if($_SERVER['REQUEST_METHOD']=='POST') {


    $Username = $_POST['user'];
    $Password = $_POST['pass'];
    $hashpassword = sha1($Password);
}
/*
    $stmt = $db->prepare("SELECT Username, Password FROM users WHERE Username =? AND Password = ? AND GroupID  =1" );
    $stmt->execute([$Username,$hashpassword]); //array($Username,$hashpassword);
    $count=$stmt->rowCount();


    if($count >0)
    {
        $_SESSION['username']==$Username;

        header('Location:dashboard.php');
        exit();
    }

    else
    {
        echo "welcome in our website"." ".$Username;
    }
}
*/
?>



<div class="container">

<form class="login" action="<?php echo$_SERVER['PHP_SELF'];?>"method="POST">
    <div class="login-head"><h3>تسجيل الدخول</h3></div>
    <input type="text" class="form-control" name="user" placeholder="اسم المستخدم" autocomplete="off">
    <input type="password" class="form-control" name="pass" placeholder="كلمة السر" autocomplete="new-password">
    <input type="submit"  class="btn btn-danger btn-block"  value="login">
</form>

</div>



<?php
@include($temp.$s);
@include($temp.$f);

?>
