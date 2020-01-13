<?php
session_start();


if(isset($_SESSION['username']))
{
    header('Location: cpl/view/index.php');
}

@include('ini.php');
@include($temp.$lg);

if($_SERVER['REQUEST_METHOD']=='POST') {


    $Username = $_POST['user'];
    $Password = $_POST['pass'];
    $hashPassword = sha1($Password);


 $stmt = $db->prepare('SELECT Username ,Password FROM users WHERE Username =? AND Password =? AND User_GroupID =1');
 $stmt->execute([$Username,$hashPassword]);
 $count = $stmt->rowCount();
 echo $count;
 if($count >0)
 {
    $_SESSION['username'] = $Username;
    header('Location: cpl/view/index.php');
    exit();
 }
 else{
    header('Location: hmh-login.php');
 }
}
?>


<div class="container">

<form class="login " action="<?php echo$_SERVER['PHP_SELF'];?>"method="POST">
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
