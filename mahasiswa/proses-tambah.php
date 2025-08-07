<?php
    $t_npm = $_POST["npm"];
    $t_nama = $_POST["nama"];
    $t_jns_kel = $_POST["jns_kel"];
    $t_prodi = $_POST["prodi"];

    include("koneksi.php");
    $perintah = "INSERT INTO tblmhs(npm,nama,jns_kel,prodi) VALUES('$t_npm','$t_nama','$t_jns_kel','$t_prodi')";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek = mysqli_affected_rows($konek);

    if($cek >0){
        ?>
        <script>alert("Simpan Data Berhasil")</script>
        <meta http-equiv="refresh" content="0;URL=index.php"/>
        <?php 
    }
    else{
        ?>
        <script>alert("Simpan Data Gagal")</script>
        <?php 
    }

?>