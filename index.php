<?php
@include('ini.php');
@include($temp.$h);
@include($temp.$n);




?>






<div class="container">

<?php

$cat = new categories();
foreach ($cat->getAllCategory() as $category)
    print_r($category);
?>


</div>
<div >
    <?php


    ?>
</div>





<?php
@include($temp.$s);
@include($temp.$f);

?>
