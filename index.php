<?php
include "cpl/classes/DB.class.php";
include 'cpl/Controler/categories.cont.php';
include 'cpl/Model/categoreis.mod.php';

$cat = new categories();
foreach ($cat->getAllCategory() as $category)
print_r($category);