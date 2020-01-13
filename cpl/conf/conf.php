<?php

 // connection with database 

$dsn ='mysql:host=localhost;dbname=news';
$user ='root';
$pass ='';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);

try
{

	$db = new PDO($dsn,$user,$pass,$option);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ, PDO::ERRMODE_EXCEPTION);
	// PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ

}
catch(PDOException $e)

{
	echo 'the connection is faild '. $e->getMassage();
}


