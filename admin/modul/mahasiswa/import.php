<?php
require '../vendor/autoload.php';
include "../sambungan.php";

if(isset($_POST['submit'])){
    $err        = "";
    $ekstensi   = "";
    $success    = "";

    $file_name  = $_FILES['filexls']['name'];   //untuk mendapatkan nama file yang diunggah
    $file_data  = $_FILES['filexls']['tmp_name'];   //untuk mendapatkan temporary file data

    if(empty($file_name)){
        $err = "<li>Silahkan masukkan file yang diinginkan.</li>";
    }else{
        $ekstensi   = pathinfo($file_name)['extension'];
    }

    $ekstensi_allowed   = array("xls","xlsx");
    if(!in_array($ekstensi,$ekstensi_allowed)){
        $err    = "Silahkan masukkan file tipe XLS atau XLSX! File bernama $file_name mempunyai tipe $ekstensi";
    }

    if(empty($err)){
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
        $spreadsheet = $reader->load($file_data);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        $jumlahData = 0;
        for($i=1;$i<count($sheetData);$i++){
            $nomor_induk = $sheetData[$i]['1'];
            $password = md5($sheetData[$i]['1']);
            $nama_lengkap = $sheetData[$i]['2'];
            $jenis_kelamin = $sheetData[$i]['3'];
            $program_studi = $sheetData[$i]['4'];
            $status_aktif = $sheetData[$i]['5'];
            $email = $sheetData[$i]['6'];
            
            #echo "$nomor_induk - $nama_lengkap - $program_studi <br/>";
            $jenis_kelamin = str_replace(array("Laki-laki","Perempuan"),array("L","P"),$jenis_kelamin);

            $sql1 = "INSERT INTO tb_mhswa(nim, password, nama, gender, prodi, email, aktif) VALUES ('$nomor_induk', '$password', '$nama_lengkap', '$jenis_kelamin', '$program_studi', '$email', '$status_aktif')";
            mysqli_query($koneksi,$sql1);
            $jumlahData++;
        }
        
        if($jumlahData > 0){
            $success = "$jumlahData data Mahasiswa berhasil ditambahkan ke dalam sistem";
        }
    }

    if($err){
        ?>
        <div id="alert-box" class="alert alert-danger" style="margin-top: 10px;">
            <ul><?php echo $err ?></ul>
        </div>
        <?php
    }
    if($success){
        ?>
        <div id="alert-box" class="alert alert-success" style="margin-top: 10px;">
            <ul><?php echo $success ?></ul>
        </div>
        <?php
    }
}
?>