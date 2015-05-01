<?php
include 'ayar.php';
global $db,$uye,$oturum;
?>
<body bgcolor="white">
<hr>
<hr>
 &nbsp;
<div align="center">
<table border="0" width="64%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="368">
		<form action="index.php?Git=UyeArama" method="POST">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="108"><font color="#000080"><b>Kullanici Adi</b></font>  :</td>
					<td>&nbsp;<input type="text" name="kullaniciadi" size="21">
					<input type="submit" value="Ara" name="araadi" style="padding: 0"></td>
				</tr>
			</table>
		</form></td>
		<td>
		<form action="index.php?Git=UyeArama" method="POST">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="87"><font color="#000080"><b>Email Adı </b>
					</font>&nbsp; :</td>
					<td>&nbsp;<input type="text" name="email" size="27">
					<input type="submit" value="Ara" name="araemail" style="padding: 0"></td>
				</tr>
			</table>
		</form></td>
	</tr>
</table>
</div>
<!--Üye Adi ve Eposta Arama Formu Bitiş-->
<!--Üye Bilgileri Listeleme -->
    &nbsp;
<div align="center">
<table border="1" width="84%" bordercolorlight="#808080" bordercolor="#808080">
<tr>
	<td width="17%" colspan="2" height="25" bgcolor="#808000"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kullanıcı Adı</b></td>
	<td width="17%" height="25" bgcolor="#808000"><b>&nbsp;Parola</b></td>
	<td width="22%" height="25" bgcolor="#808000"><b>&nbsp;Adı Soyadı</b></td>
	<td width="16%" height="25" bgcolor="#808000"><b>&nbsp;Email</b></td>
	<td width="8%" height="25"  bgcolor="#808000"><b>&nbsp;Cinsiyet</b></td>
	<td colspan="2" height="25" bgcolor="#808000"><b>&nbsp;Kontroller</b></td>
</tr>
<?php
 $sor=$db->prepare("SELECT * FROM uyeler ORDER BY id ASC");
	$sor->execute();
	$veri = $sor->fetchAll(); 
	if($veri)
	{   foreach($veri as $yaz)
        {   $id            =$yaz["id"];
			$kullaniciadi  =$yaz["kullaniciadi"];
			$adisoyadi     =$yaz["adisoyadi"];
			$cinsiyet      =$yaz["cinsiyet"];
			$parola        =$yaz["parola"];
			$email 		   =$yaz["email"];
			//$kriptoluparola=crypt($parola,"CMD");
			if($cinsiyet==1)
			   	$cinsiyet="Erkek";
			else
			   	$cinsiyet="Bayan";
?>
<tr>
			<td width="4%">  <?php echo $id; ?></td>
			<td width="13%"> <?php echo $kullaniciadi; ?></td>
			<td width="17%"> <?php echo $parola; ?></td>
			<td width="22%"> <?php echo $adisoyadi; ?></td>
			<td width="16%"> <?php echo $email; ?></td>
			<td width="8%">  <?php echo $cinsiyet; ?></td>
			<td width="8%" bgcolor="#808080">
			<a href="index.php?Git=UyeDuzenle&id=<?php echo $id; ?>"><b>
			<span style="text-decoration: none">[Düzenle]</span></b><span style="text-decoration: none">
			</span></a> </td>
			<td width="6%" bordercolor="#808080" bgcolor="#808080"><b>&nbsp;<a href="index.php?Git=UyeSil&id=<?php echo $id; ?>"><span style="text-decoration: none">[Sil ]
			</span></a>
			</b></td>
		</tr>
</div>
<?php
		}
	}
	echo "</table>";
?>
</body>