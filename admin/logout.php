<?php
session_start();
unset($_SESSION['id_admin']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['hak_akses']);
unset($_SESSION['foto']);
setcookie('cookielogin[user]','');
//setcookie("cookielogin[user]", $user , $waktu + (3600*24*7));
echo "<script>window.location='../'</script>";
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
