<?php
    $t_npm = $_POST["npm"];
    $t_nama = $_POST["nama"];
    $t_jns_kel = $_POST["jns_kel"];
    $t_prodi = $_POST["prodi"];
    $t_beasiswa = isset($_POST["beasiswa"]) ? $_POST["beasiswa"] : "Tidak";

    // Pastikan folder uploads ada
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    // Proses upload foto 
    if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0){
        $nama_file = basename($_FILES["foto"]["name"]);
        $target = "uploads/" . $nama_file;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
    }

    include("koneksi.php");
    $perintah = "INSERT INTO tblmhs(npm,nama,jns_kel,prodi,foto,beasiswa) VALUES('$t_npm','$t_nama','$t_jns_kel','$t_prodi','$nama_file','$t_beasiswa')";
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