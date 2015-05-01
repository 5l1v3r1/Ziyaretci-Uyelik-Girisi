<?php
include 'ayar.php';
global $db;

	$kullaniciadi	= $_POST["kullaniciadi"];
	$parola			= $_POST["parola"];
	$adisoyadi		= $_POST["adisoyadi"];
	$email 			= $_POST["email"];
	$cinsiyet		= $_POST["cinsiyet"];

		if(($kullaniciadi=="") || ($parola==""))
		{
            
			echo "<body topmargin=\"100\"><center>Lütfen Kullanıcı Adı Yada Parola Alanını Boş Bırakmayın</center>";
			header("Refresh: 2; url=index.php?Git=UyeKaydi");
		}
	
		else
		{	//var_dump($kullaniciadi);
			$uyesor= $db->prepare(" SELECT * FROM uyeler WHERE kullaniciadi='$kullaniciadi' || email='$email' "); 
			$uyesor->execute();
			$uye_sor=$uyesor->rowCount();
			
				if ($uye_sor>0)
				{
					echo "<body topmargin=\"100\"><center>Veritabanında böyle bir kullanıcı ya da email adresi zaten var</center>";
					header("Refresh:2; url=index.php?Git=UyeKaydi");
				}
				else           
				{
					$ekle=$db->prepare("INSERT INTO uyeler(kullaniciadi,parola,adisoyadi,email,cinsiyet) 
						    VALUES('$kullaniciadi','$parola','$adisoyadi','$email','$cinsiyet')");
						    $ekle->execute();
						    if($ekle)
						    {
						    	echo "<body topmargin=\"100\"><center>Kayıt Tamamlandı</center>";
								header("Refresh:2; url=index.php?Git=UyeKaydi");
						    }
						    else
						    {
						    	echo "<body topmargin=\"100\"><center>HATA Kullanıcı kaydı yapılamadı</center>";
								header("Refresh:2; url=index.php?Git=UyeKaydi");
						    }
				}

		}

?>