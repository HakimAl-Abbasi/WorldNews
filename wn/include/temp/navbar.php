<!-- Preloader Start -->
<?php
include "cpl/classes/DB.class.php";
include 'cpl/Controler/categories.cont.php';
include 'cpl/Model/categoreis.mod.php';
?>
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php">WORLD NEWS </a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                          <?php
                            $category = new categories();

                            foreach ($category->getAllMainNamesCategories() as $catName) {
                                $MainName = $catName['Cat_name'];
                                $cat_id = $catName['cat_id'];


                                ?>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?id=<?php echo $cat_id;?>"><?php echo $MainName;?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

