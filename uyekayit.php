<?php
include 'ayar.php';
?>
<html>
<head>
	<title>Yeni Üye Kayıt Formu</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="css/uyekayit.css" />
</head>

<body>
<img src="http://in.sitekodlari.com/prla/kybc.gif" border="0" alt="CMD">
<img src="http://in.sitekodlari.com/prla/kybm.gif" border="0" alt="CMD"> 
<img src="http://in.sitekodlari.com/prla/kybd.gif" border="0" alt="CMD">
	<div id="page-wrap">

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/uyekayit.gif" alt="A Nice &amp; Simple Contact Form" align="center" /><br /><br />
						
		
			<div class="dis">
			<form action="index.php?Git=YeniKayit" method="POST">
			<div class="birinci">
				<label for="KAdi">Kullanıcı Adı:</label>
				<input type="text" name="kullaniciadi"  />
				</div>

				<div class="ikinci">
				<label for="parola">Parola:</label>
				<input type="password" name="parola" />
				</div>

				<div class="ucuncu">
				<label for="AdiSoydi">Adı Soyadı:</label>
				<input type="text" name="adisoyadi"  />
				</div>
				
				<div class="dorduncu">
				<label for="Email">Email:</label>
				<input type="text" name="email" />
				<label  for="Cinsiyet"> Cinsiyet:</label>
				</div>
				
				<div class="besinci">
		
				<label for="Cinsiyet"> Erkek</label>
				<input type="radio" name="cinsiyet" value="1"/>
				<label for="Cinsiyet"> &nbsp;&nbsp;&nbsp;&nbsp;Bayan</label>
				<input type="radio" name="cinsiyet" checked value="2"/>
				
				</div>

	            <div class="altinci">
				<input type="submit" name="submit" value="Kaydet" class="submit-button" />
				</div> 

				
			</form>
			</div>
			<div style="clear: both;"></div>	
	
	</div>

<div style="height:100px;"></div>
</body>

</html>

