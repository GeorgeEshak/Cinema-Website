<?php
include("DB.php");
$db=new DataBase("Users");
$q= "insert into Uinfo(Username,Email,Password) values
('Ahmed Gamil','Ahmed@gmail.com','1515516'),
('Ahmed Mostafa','Ahmed@hotmail.com','54545465'),
('Mouhamed Ahmed','Mouhamed@hotmail.com','488864'),
('Mouhamed Mostafa','Mouhamed@gmail.com','989899'),
('George Eshak','George@hotmail.com','989899'),
('George Shawky','George@gmail.com','995555'),
('Mina Zaki','Mina@hotmail.com','989899');";
 $db->myExec($q);
?>
