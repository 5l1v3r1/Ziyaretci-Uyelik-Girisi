<?php
include 'ayar.php';
global $db;
if(isset($_POST['email'])) 
{
	$email =$_POST["email"];
	$sor=$db->prepare("SELECT * FROM uyeler WHERE email LIKE '%$email%' ORDER BY id ASC");
   	$sor->execute();
}
if(isset($_POST['kullaniciadi']))
{
	$kullaniciadi  =$_POST["kullaniciadi"];
	$sor=$db->prepare("SELECT * FROM uyeler WHERE kullaniciadi LIKE  '%$kullaniciadi%' ORDER BY id ASC");
    $sor->execute();
}
var_dump($sor->rowCount());
if($sor->rowCount() > 0)
{
?>
<div align="center">
<b>Aranan Sonuçlarda </b>
<p><b>Toplam $toplamsonuc Sonuç Bulundu</b></p>
</div>
    <div align="center">
	<table border="1" width="84%" bordercolorlight="#808080" bordercolor="#808080">
	<tr>
		<td width="17%" colspan="2" height="25" bgcolor="#808000"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kullanıcı</b></td>
		<td width="17%" height="25" bgcolor="#808000"><b>&nbsp;Parola</b></td>
		<td width="22%" height="25" bgcolor="#808000"><b>&nbsp;Adı Soyadı</b></td>
		<td width="16%" height="25" bgcolor="#808000"><b>&nbsp;Email</b></td>
		<td width="8%" height="25" bgcolor="#808000"><b>&nbsp;Cinsiyet</b></td>
		<td colspan="2" height="25" bgcolor="#808000"><b>&nbsp;Kontroller</b></td>
	</tr>
<?php
	$veri = $sor->fetchAll();
	if($veri)
	{   foreach($veri as $yaz)
        {   $id             =$yaz["id"];
			$kullaniciadi1  =$yaz["kullaniciadi"];
			$adisoyadi      =$yaz["adisoyadi"];
			$cinsiyet       =$yaz["cinsiyet"];
			$parola         =$yaz["parola"];
			$email 		    =$yaz["email"];
			$kriptoluparola=crypt($parola,"CMD");
			if($cinsiyet==1)
			   	$cinsiyet="Erkek";
			else
			   	$cinsiyet="Bayan";
?>
		<tr>
			<td width="4%">  <?php echo $id; ?></td>
			<td width="13%"> <?php echo $kullaniciadi; ?></td>
			<td width="17%"> <?php echo $kriptoluparola; ?></td>
			<td width="22%"> <?php echo $adisoyadi; ?></td>
			<td width="16%"> <?php echo $email; ?></td>
			<td width="8%">  <?php echo $cinsiyet; ?></td>
			<td width="8%" bgcolor="#808080">
			<a href="index.php?Git=UyeDuzenle&id=$id"><b>
			<span style="text-decoration: none">[Düzenle]</span></b><span style="text-decoration: none">
			</span></a> </td>
			<td width="6%" bordercolor="#808080" bgcolor="#808080"><b>&nbsp;<a href="index.php?Git=UyeSil&id=$id"><span style="text-decoration: none">[Sil ]
			</span></a>
			</b></td>
		</tr>
</div>
<?php
        }
	}
	echo "</table>";
}
   else
   {
         echo "<body topmargin=\"100\"><center><b>Aradığınız Kriterlerde Kullanıcı Bulunamadı</b></center>\n";
   }
?>