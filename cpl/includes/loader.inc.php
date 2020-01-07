<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path ='classes/';
    $extension ='.class.php';
    $Full_Path =$path.$className.$extension;
    if(!file_exists($Full_Path))
    {
        return false;
    }
    include_once $Full_Path;

}