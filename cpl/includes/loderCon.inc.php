<?php
spl_autoload_register('controller');

function controller($className)
{
    $path ="../Controler";
    $extension ='.cont.php';
    $Full_Path =$path.$className.$extension;
    if(!file_exists($Full_Path))
    {
        return false;
    }
    include_once $Full_Path;

}