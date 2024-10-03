<?php
session_start();
unset($_SESSION['nim']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['prodi']);
unset($_SESSION['foto']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
