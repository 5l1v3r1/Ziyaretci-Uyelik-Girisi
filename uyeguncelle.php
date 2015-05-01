<?php
include 'ayar.php';
global $db;
	$id             =$_GET["id"];
	$kullaniciadi   =$_POST["kullaniciadi"];
	$parola      	=$_POST["parola"];
	$adisoyadi		=$_POST["adisoyadi"];
	$cinsiyet 		=$_POST["cinsiyet"];
	$email 			=$_POST["email"];

if(($kullaniciadi=="") || ($adisoyadi==""))
	{
        echo "<body topmargin=\"100\"><center><b>Lütfen Kullanıcı Adı  ve Adı Soyadı Kısmını Doldurun</b></center>\n";
        echo "<div style=\"height:600px;\"></div>\n";
		header("Refresh:2; url=index.php?Git=UyeListesi");
	}
	else if($parola=="")
	{   
		$guncelle=$db->prepare("UPDATE uyeler SET kullaniciadi='$kullaniciadi',adisoyadi='$adisoyadi',email='$email',cinsiyet='$cinsiyet'  WHERE id='$id' ");
		$guncelle->execute();	
		     if($guncelle)
		     {
		     	//var_dump($guncelle->errorinfo());
		     	echo "<body topmargin=\"100\"><center><b>Üye Güncellendi</b></center>\n";
		     	echo "<div style=\"height:600px;\"></div>\n";
		     	header("Refresh:2; url=index.php?Git=UyeListesi");
		     }
		     else
		     {
		     	echo "<body topmargin=\"100\"><center><b>HATA Veriler Güncellenemedi</b></center>\n";
		     	echo "<div style=\"height:600px;\"></div>\n";
		     	header("Refresh:2; url=index.php?Git=UyeListesi");
		     }
	}
	else
	{
		$guncelle=$db->prepare("UPDATE uyeler SET kullaniciadi='$kullaniciadi',adisoyadi='$adisoyadi',parola='$parola',email='$email',cinsiyet='$cinsiyet'  WHERE id='$id' ");
		$guncelle->execute();
		     if(isset($guncelle))
		     {
		     	echo "<body topmargin=\"100\"><center><b>Üye Güncellendi</b></center>\n";
		     	echo "<div style=\"height:600px;\"></div>\n";
		     	header("Refresh:2; url=index.php?Git=UyeListesi");
		     }
		     else
		     {
		     	echo "<body topmargin=\"100\"><center><b>HATA Veriler Güncellenemedi</b></center>\n";
		     	echo "<div style=\"height:600px;\"></div>\n";
		     	header("Refresh:2; url=index.php?Git=UyeListesi");
		     }

	}	

?>
