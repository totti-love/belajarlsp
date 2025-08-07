<?php
    $t_npm = $_POST["npm"];
    $t_nama = $_POST["nama"];
    $t_jns_kel = $_POST["jns_kel"];
    $t_prodi = $_POST["prodi"];
    $t_beasiswa = isset($_POST["beasiswa"]) ? $_POST["beasiswa"] : "Tidak";
    $foto_lama = isset($_POST["foto_lama"]) ? $_POST["foto_lama"] : "";

    // Proses upload foto baru jika ada
    $nama_file = $foto_lama;
    if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0){
        $nama_file = basename($_FILES["foto"]["name"]);
        $target = "uploads/" . $nama_file;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
    }

    include("koneksi.php");
    $perintah = "UPDATE tblmhs SET nama = '$t_nama', jns_kel = '$t_jns_kel', prodi = '$t_prodi', foto = '$nama_file', beasiswa = '$t_beasiswa' WHERE npm = '$t_npm'";
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