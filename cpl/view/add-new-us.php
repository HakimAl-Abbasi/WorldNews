<?php
include 'includes/header-nav.php';
?>





<br><br>
<br><br>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="FName">Name</label>
            <input type="text" class="form-control"  aria-describedby="FName" placeholder="Enter Your Name">

        </div>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
            <div>
        <div class="form-group">
            <label for="PDW">Password</label>
            <input type="password" class="form-control" id="PDW" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="FullName">Full Name</label>
            <input type="text" class="form-control" id="FullName" placeholder="Full Name">
        </div>
        <div class="form-group">
            <label for="Phone">User Phone</label>
            <input type="text" class="form-control" id="Phone" placeholder="Phone">
        </div><div class="form-group">
            <label for="RegisterDate">Register Date </label>
            <input type="date" class="form-control" id="RegisterDate">
        </div>


        <button type="submit" class="btn btn-primary">Insert</button>
    </form>

</div>














<?php include'includes/footer.php';?>
