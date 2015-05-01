<?php
include "ayar.php";
global $db;
if(!isset($_GET['id'])){
	die('id girilmemiş ');
}
$id = $_GET['id']; 
var_dump($id);
$veri=$db->prepare("DELETE FROM uyeler WHERE id= :id ");
$veri->bindParam(':id', $id, PDO::PARAM_INT);
$veri->execute(); 
var_dump($veri);

	if ($veri)
	{
	    echo "<body topmargin=\"100\"><center><b>Üye Silindi</b></center>\n";
	    header("Refresh:2; url=index.php?Git=UyeListesi");
    }
    else
	{
		echo "<body topmargin=\"100\"><center><b>HATA Uye Silinemedi</b></center>\n";
		header("Refresh:2; url=index.php?Git=UyeListesi");
	}
?>