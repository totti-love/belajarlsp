<?php
    // Ambil data dari form menggunakan metode POST
    $t_npm = $_POST["npm"];
    $t_nama = $_POST["nama"];
    $t_jns_kel = $_POST["jns_kel"];
    $t_prodi = $_POST["prodi"];
    
    // Cek apakah checkbox beasiswa dicentang, jika tidak beri nilai default "Tidak"
    $t_beasiswa = isset($_POST["beasiswa"]) ? $_POST["beasiswa"] : "Tidak";

    // Pastikan folder 'uploads' ada, jika belum maka buat folder tersebut
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    // Proses upload file foto jika ada dan tidak terjadi error
    if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0){
        // Ambil nama file asli
        $nama_file = basename($_FILES["foto"]["name"]);
        // Tentukan path tujuan penyimpanan file
        $target = "uploads/" . $nama_file;
        // Pindahkan file dari temporary ke folder tujuan
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
    }

    // Hubungkan ke database
    include("koneksi.php");

    // Buat perintah SQL untuk menyimpan data ke tabel tblmhs
    $perintah = "INSERT INTO tblmhs(npm,nama,jns_kel,prodi,foto,beasiswa) 
                 VALUES('$t_npm','$t_nama','$t_jns_kel','$t_prodi','$nama_file','$t_beasiswa')";

    // Eksekusi perintah SQL
    $eksekusi = mysqli_query($konek, $perintah);

    // Cek apakah data berhasil disimpan
    $cek = mysqli_affected_rows($konek);

    // Jika berhasil, tampilkan alert dan redirect ke index.php
    if($cek > 0){
        ?>
        <script>alert("Simpan Data Berhasil")</script>
        <meta http-equiv="refresh" content="0;URL=index.php"/>
        <?php 
    }
    // Jika gagal, tampilkan alert gagal
    else{
        ?>
        <script>alert("Simpan Data Gagal")</script>
        <?php 
    }
?>
