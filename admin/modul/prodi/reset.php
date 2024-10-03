<?php
include "../sambungan.php";
$sql = "TRUNCATE TABLE tb_prodi";
$reset = mysqli_query($koneksi,$sql);
if($reset){
    header('Location: ?m=prodi');
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>