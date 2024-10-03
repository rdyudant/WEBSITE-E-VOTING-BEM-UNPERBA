<?php
include "../sambungan.php";
$sql = "DELETE FROM tb_mhswa";
$reset = mysqli_query($koneksi,$sql);
if($reset){
    header('Location: ?m=mahasiswa');
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>