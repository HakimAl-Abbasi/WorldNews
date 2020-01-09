<?php
include "cpl/classes/DB.class.php";
include'cpl/Controler/categories.cont.php';
include 'cpl/Model/categoreis.mod.php';

?>

<header class="header-area">
    <!-- Navbar Area -->
    <div class="newsbox-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between " id="newsboxNav">

                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand ">AlabbasiNews</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <?php
                                $category = new categories();
                                foreach ($category->getAllMainNamesCategories() as $categories) {

                                    $MainName = $categories['Cat_name'];

                                    ?>

                                    <li><a href="#"><?php echo $MainName;?></a></li>
                                    <?php
                                }
                                ?>
                                <!--
                                <li><a href="#">Local News</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="catagory.php">Catagory</a></li>
                                        <li><a href="single-post.php">Single Post</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="elements.php">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sport</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Archery</a></li>
                                        <li><a href="#">Badminton</a></li>
                                        <li><a href="#">Baseball</a></li>
                                        <li><a href="#">Boxing</a></li>
                                        <li><a href="#">Climbing</a></li>
                                        <li><a href="#">Cricket</a></li>
                                        <li><a href="#">Football</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Lifestyle</a></li>-->
                            </ul>


                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->







<!-- ##### Breaking News Area Start ##### -->
<section class="breaking-news-area clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Breaking News Widget -->
                <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                    <div class="title">
                        <h6>Trending</h6>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breaking News Area End ##### -->
