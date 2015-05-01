<?php
  include 'ayar.php';
  global $uye,$oturum;
   if(($uye=="") || ($oturum==""))
   {
     include 'uyegirisi.php';
   }
   else
   {
   	 echo "<body topmargin=\"100\"><center><b>Oturumu Açtınız</b></center>";
   	 echo "<body topmargin=\"110\"><center>Burası sizin üye Hesabınız</center>";
   	 echo "<body topmargin=\"120\"><center>Oturumu Açtınız</center>";
   	 echo "<body topmargin=\"130\"><center>Oturum Tarihi    :".$oturum."</center>";
   	 echo "<body topmargin=\"140\"><center>Kullamıcı Adınız :".$uye."</center>";  
     echo "<p align=\"center\"><b><a href=\"index.php?Git=Cikis\">\n";
     echo "<span style=\"text-decoration: none\"><font color=\"#00FF00\">Oturumu Kapat</font></span></a></b></p>\n";
   }
?>
<div style="height:278px;"></div>