<?php
 include 'ayar.php';
 global $uye,$oturum;
 session_destroy();
 unset($uye);
 unset($oturum);
 header("Location:index.php");

?>