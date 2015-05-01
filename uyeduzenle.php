<?php

include "ayar.php";
global $db;
if(!isset($_GET['id'])){
	die('id girilmemiş ');
}

$id = $_GET["id"]; 
$veriler=$db->prepare("SELECT * FROM uyeler WHERE id= :id ");
$veriler->bindParam(':id', $id, PDO::PARAM_INT);
$veriler->execute(); 
$sorgu=$veriler->fetchObject();   
if($sorgu) {
?>
<div align="center">
<form action="index.php?Git=UyeGuncelle&id=<?php echo $id; ?>" method="POST"><p><font size="4"> <h1><center>&nbsp;<p>
	<font color="#008000"><b>ÜYE DÜZENLEME FORMU</b></font></p></h1></font></p>
<table cellspacing="0" cellpadding="0">
	<tr>
		<td width="31%">Kullanıcı Adı </td>
		<td width="1%"><font size="4">:</font></td>
		<td width="67%"><input type="text"  name="kullaniciadi" value=<?php echo $sorgu->kullaniciadi ?>></td>
	</tr>
	<tr>
		<td width="31%">Parola</td>
		<td width="1%"><font size="4">:</font></td>
		<td width="67%"><input type="password"  name="parola" size="20" >
		<font color="#FF0000">&nbsp;*Değiştirmeyecekseniz boş bırakın</font></td>
	</tr>
	<tr>
		<td width="31%">Adınız Soyadınız</td>
		<td width="1%"><font size="4">:</font></td>
		<td width="67%"><input type="text" name="adisoyadi" value=<?php echo $sorgu->adisoyadi; ?> size="20" ></td>
	</tr>
	<tr>
		<td width="31%">Email Adresiniz</td>
		<td width="1%"><font size="4">:</font></td>
		<td width="67%"><input type="text" name="email" size="20" value=<?php echo $sorgu->email; ?> ></td>
	</tr>
	<tr> 
		<td width="31%">Cinsiyet</td>
		<td width="1%">&nbsp;</td>
		<td width="67%">
        <input type="radio" value="1" name="cinsiyet" >Erkek
	    <input type="radio" name="cinsiyet" value="2" checked>Bayan
	</td>;
		</tr>
		<tr>
			<td colspan="3">
			<input type="submit" value="Güncelle" style="font-weight: bold"></td>
		</tr>
	</table>
	</form>
</div>
<div style="height:268px;"></div>
<?php 
} 
else 
{ 
 /*print_r($sorgu->errorInfo())*/
echo "Veri alınırken hata oluştu";
}
 ?>