<?php
if(empty($_SESSION['id_admin']) AND empty($_SESSION['username'])){
    include_once "../sambungan.php";
    $user=$_COOKIE['cookielogin']['username'];
    $sql = "SELECT * FROM tb_admin WHERE username='$user' AND aktif='Y'";
    $login=mysqli_query($koneksi,$sql);
    $ketemu=mysqli_num_rows($login);
    $b=mysqli_fetch_array($login);
    //if(($_COOKIE['cookielogin']['user']==$username)
    if($ketemu>0){
        //session_start();
        //if(isset($_COOKIE['cookielogin'])){
        $_SESSION['id_admin'] 		= $b['id_admin'];
        $_SESSION['username'] 		= $b['username'];
        $_SESSION['nama']    		= $b['nama'];
        $_SESSION['hak_akses'] 	    = $b['hak_akses'];
        if($b['foto']==""){
            $_SESSION['foto'] 	= "1.jpg";
        }else{
            $_SESSION['foto'] 	= $b['foto'];
        }
    }else{
        header('location:login-adm.php');
    }
}
?>