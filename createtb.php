<?php
 include("DB.php");
 $db=new DataBase("Users");
$q= "create table Uinfo (
Username varchar(50) ,
Email varchar(50) NOT NULL PRIMARY KEY, 
Password varchar(15));";

 $db->myExec($q);
?>
