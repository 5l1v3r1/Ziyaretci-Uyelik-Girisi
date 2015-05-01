<!--
<form action="index.php?Git=GirisKontrol" method="post">
 <div align="center">
 &nbsp;<p>&nbsp;</p>
 <table border="0" width="39%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="135"><b>Kullanıcı Adı</b></td>
		<td width="4"><b>:</b></td>
		<td><input type="text" name="kullaniciadi" size="24"></td>
	</tr>
	<tr>
		<td width="135"><b>Parola</b></td>
		<td width="4"><b>:</b></td>
		<td><input type="password" name="parola" size="24"></td>
	</tr>
	<tr>
			<td colspan="3"><input type="submit" value="Giriş"></td>			
			</td>
 </table>

	</div>

</form>
<div style="width:100%; float:left; height:388px;"></div>

---------------------------------------------------------->

<html>
<head>
	<title>Üye Girişi</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="page-wrap">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/uyegiris.gif" alt="Üye Girisi Formu" /><br /><br />
						
		<div id="contact-area">
			
			<form action="index.php?Git=GirisKontrol" method="POST">
				<label for="Name">Kullamıcı Adı:</label>
				<input type="text" name="kullaniciadi"/>
				
				<label for="City">Parola:</label>
				<input type="password" name="parola"/>
				<input type="submit" name="submit" value="Giriş" class="submit-button" />
			</form>
			
			<div style="clear: both;"></div>
			
		</div>
	
	</div>
	<div style="height:200px;"></div>
</body>

</html>

