<?php
spl_autoload_register('myModeloder');

function myModeloder($className)
{
    $path ='../Model';
    $extension ='.mod.php';
    $Full_Path =$path.$className.$extension;
    if(!file_exists($Full_Path))
    {
        return false;
    }
    include_once $Full_Path;

}