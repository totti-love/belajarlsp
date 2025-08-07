<?php
    $t_npm = $_POST["npm"];
    $t_nama = $_POST["nama"];
    $t_jns_kel = $_POST["jns_kel"];
    $t_prodi = $_POST["prodi"];

    include("koneksi.php");
    $perintah = "UPDATE tblmhs SET nama = '$t_nama', jns_kel = '$t_jns_kel', prodi = '$t_prodi' WHERE npm = '$t_npm'";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek = mysqli_affected_rows($konek);

    if($cek >0){
        ?>
        <script>alert("Ubah Data Berhasil")</script>
        <meta http-equiv="refresh" content="0;URL=index.php"/>
        <?php 
    }
    else{
        ?>
        <script>alert("Ubah Data Gagal")</script>
        <?php 
    }

?>