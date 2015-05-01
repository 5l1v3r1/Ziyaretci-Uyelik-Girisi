<html>
<head>
<meta http-equiv="Content-Language"  content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cihans Site</title>
<style type="text/css">
.kutuu
{
	background: url(images/simple.jpg) repeat;

}
.ustuu
{
margin-top:0px;
float:left;
}

.altu
{
float: left;
width: :100%;

}
.menu {
	color : #000000;
	margin-top : 10px;
	padding-bottom : 10px;
	margin-bottom : 0px;
	margin-left : 10px;
	margin-right : 10px;
	font-size : 12px;
	font-family : Tahoma,Verdana,Arial;
	font-weight: bold;
}
.menu a {
	color : #000000;
	text-decoration: none;
}
.menu a:hover {
	color : #294A7B;
}

</style>

</head>
<body>
<div class="kutu">
<div class="ust">
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%">
<table cellpadding="0" cellspacing="0" border="0" background="images/fon_menu.gif" width="100%">
<tr align="center">
	<td><p class="menu"><a href="index.php?Git=UyeKaydi">ÜYE KAYIT</a></p></td>
	<td>
	<img src="images/e_menu01.gif" width="2" height="49" alt="" border="0"></td>
	<td><p class="menu"><a href="index.php?Git=UyeGirisi">ÜYE GİRİŞİ</a></p></td>
	<td>
	<img src="images/e_menu01.gif" width="2" height="49" alt="" border="0"></td>
	<td><p class="menu"><a href="index.php?Git=UyeListesi">ÜYE LİSTELE</a></p></td>
	</tr>
</table>
</div>
<?php

session_start();
ob_start(); //Oturumun açılabilmesi için gerekli fonsiyonlar
include 'ayar.php';

$uye    = $_SESSION['kullaniciadi'];
$oturum = $_SESSION['oturumtarihi'];

$Git = $_GET["Git"]; //$_GET medodu tarayıcıdan veri çeker //$_POST metodu tarayıcıya veri iletir
switch ($Git)
{ 	
	default:
		include 'sesion.php';
		break;
	case "UyeKaydi";     
		include 'uyekayit.php';
		break;
	case "YeniKayit";
	    include 'yenikayit.php';
	    break; 
	case "UyeListesi";
	    include 'uyelistesi.php';
	    break;
	case "UyeDuzenle";
	    include 'uyeduzenle.php';
		break;
	case "UyeGuncelle";
	    include 'uyeguncelle.php';
		break;
	case "UyeSil";
	    include 'uyesil.php';
	    break;
	case "UyeArama";
	    include 'uyearama.php';
	    break;
	case "UyeGirisi";
	    include 'uyegirisi.php';
	    break;
    case "GirisKontrol";
        include 'giriskontrol.php';
        break;
    case "Cikis";
        include 'cikis.php';
        break;

}
?>
<div class="alt">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td colspan="2" height="33" background="images/fon_bot.gif">
	<img src="images/px1.gif" width="1" height="1" alt="" border="0"></td>
</tr>
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#0066CC" >
	<tr>
		<td>
			<b><a href ="http://www.yazilimodasi.com/">
			<span style="text-decoration: none">Copyright ©2014 Cihan Mehmet DOĞAN</span></a></b></td>

		<td>


		<p class="menu" align="center">
			   <a href="index.php?Git=UyeKaydi">Üye Kayıt</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <a href="index.php?Git=UyeGirisi">Üye Girişi</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <a href="index.php?Git=UyeListesi">Üye Listele</a>
       </p>		
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td colspan="2" height="33" background="images/fon_bot.gif"><img src="images/px1.gif" width="1" height="1" alt="" border="0"></td>
</tr>
</table>
</table>

</div>
</div>
</body>

</html>