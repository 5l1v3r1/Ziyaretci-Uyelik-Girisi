<?php

//$db = new PDO('mysql:dbname=z_uyelik;charset=utf8;host=localhost','root','');

$db_host="localhost";
$db_name="z_uyelik";
$db_user="root";
$db_password="";
try 
{
      $db = new PDO('mysql:host='.$db_host.';charset=utf8;dbname='.$db_name, $db_user, $db_password);
      $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
} 
catch (PDOException $e) 
{
      echo 'Bağlantı hatası: ' . $e->getMessage();
      die();
}      
?>