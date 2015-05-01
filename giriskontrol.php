<?php 
include 'ayar.php';
 global $db;
    $kullaniciadi = $_POST["kullaniciadi"];
    $parola       = $_POST["parola"];

    if(($kullaniciadi=="") || ($parola==""))
    {
        echo "<body topmargin=\"100\"><center><b>Lütfen Kullanici ve Parola alanlarını boş bırakmayınız</b></center>\n";
        header("Refresh:2; url=index.php?Git=UyeGirisi");
    }
    else
    {
        $giris =$db->prepare('SELECT * FROM uyeler WHERE kullaniciadi =:kullaniciadi and parola = :parola ');
        //$giris->bindParam(':kullaniciadi', $kullaniciadi, PDO::PARAM_STR);
        //$giris->bindParam(':parola', $parola, PDO::PARAM_STR);
        $giris->execute(array(':kullaniciadi'=>$kullaniciadi, ':parola'=>$parola));
        //$giris->execute();
        //$sorgu=$giris->fetchObject();
        if($giris->rowCount() > 0)
        {
            $_SESSION["kullaniciadi"]  =$kullaniciadi;
            $_SESSION["oturumtarihi"]  =date("d.m.Y");
            header("Location:index.php");
        }
        else
        {
            echo "<body topmargin=\"100\"><center><b>Kullanıcı ya da parolanız yanlış</b></center>\n";
        }
    }

?>
