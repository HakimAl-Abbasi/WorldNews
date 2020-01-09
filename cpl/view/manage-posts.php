<?php
include 'includes/header-nav.php';;
include "../classes/DB.class.php";
include'../Controler/User.cont.php';



$do =isset($_GET['do'])?$_GET['do']:'Manage';

if($do == 'Manage') {
    ?>

    <?php

}

elseif ($do =='addNew') {

    ?>

    <?php
}

elseif ($do =='Edit') {
    $user_id = isset($_GET['User_ID']) && is_numeric($_GET['User_ID']) ? intval($_GET['User_ID']) : 0;
    ?>

    <?php
}
?>
































include 'includes/footer.php'; ?>
