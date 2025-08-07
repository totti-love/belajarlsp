<?php
    $t_npm = $_GET["kirim"];

    // Jika belum ada konfirmasi, tampilkan pertanyaan
    if (!isset($_GET['confirm'])) {
        ?>
        <script>
            if (confirm("Apakah Anda yakin ingin menghapus data?")) {
                window.location.href = "proses-hapus.php?kirim=<?php echo $t_npm; ?>&confirm=yes";
            } else {
                window.location.href = "index.php";
            }
        </script>
        <?php
        exit();
    }

    include("koneksi.php");
    $perintah = "DELETE FROM tblmhs WHERE npm = '$t_npm'";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek = mysqli_affected_rows($konek);

    if($cek >0){
        ?>
        <script>alert("Hapus Data Berhasil")</script>
        <meta http-equiv="refresh" content="0;URL=index.php"/>
        <?php 
    }
    else{
        ?>
        <script>alert("Hapus Data Gagal")</script>
        <?php 
    }

?>