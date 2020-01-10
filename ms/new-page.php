<?php

include "cpl/classes/DB.class.php";
include 'cpl/Controler/categories.cont.php';
include 'cpl/Model/categoreis.mod.php';


$cat = new categories();
foreach ($cat-> getAllMainNamesCategories()as $cats)
{
    print_r($cats);
}