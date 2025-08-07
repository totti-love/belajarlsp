<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid col-11">

        <div class="mt-4 p-4 bg-primary text-white rounded">
            <h1>Kampus Inovasi</h1>
        </div>    
        <p class="h3 mt-3">Ubah Data Mahasiswa</p>

        <a href="index.php" type="button"class="btn btn-secondary">Kembali</a>

        <?php
            $t_npm = $_GET["kirim"];
            include("koneksi.php");
            $perintah = "SELECT * FROM tblmhs WHERE npm = '$t_npm'";
            $eksekusi = mysqli_query($konek, $perintah);
            $ambildata = mysqli_fetch_array($eksekusi)

        ?>
        <form action="proses-ubah.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="npm" class="form-label">NPM :</label>
                <input type="text"  value="<?php echo $ambildata["npm"]; ?>" class="form-control" id="npm" placeholder="Masukkan Nomor Pengenal Mahasiswa" name="npm" readonly>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" value="<?php echo $ambildata["nama"]; ?>" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama">
            </div>

            <div class="mb-3">
                <label for="jns_kel">Jenis Kelamin :</label>
                <div class="d-flex gap-3 mb-3">
                    <?php
                    $t_jns_kel = $ambildata ["jns_kel"];

                    if($t_jns_kel == "LK"){
                        $pilih_lk = "checked";
                        $pilih_pr = ""; 
                    }
                    else if($t_jns_kel == "PR"){
                        $pilih_pr = "checked";
                        $pilih_lk = ""; 

                    }
                    ?>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="LK" name="jns_kel" value="LK" <?php echo $pilih_lk ?>>Laki-laki
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="PR" name="jns_kel" value="PR" <?php echo $pilih_pr ?>>Perempuan
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi :</label>
             <?php
                    $t_prodi = $ambildata ["prodi"];

                    if($t_prodi == "Manajemen Informatika"){
                        $pilih_mi = "selected";
                        $pilih_dkv = ""; 
                        $pilih_if = "";
                    }
                    else if($t_prodi == "Desain Komunikasi Visual"){
                        $pilih_dkv = "selected";
                        $pilih_mi = ""; 
                        $pilih_if = "";
                    }
                    elseif($t_prodi == "Informatika"){
                        $pilih_dkv = "";
                        $pilih_mi = ""; 
                        $pilih_if = "selected";
                    }
                    ?>
                <select class="form-select" id="prodi" name="prodi">
                    <option value="Manajemen Informatika"<?php echo $pilih_mi ?>>Manajemen Informatika</option>
                    <option value="Desain Komunikasi Visual" <?php echo $pilih_dkv ?>>Desain Komunikasi Visual</option>
                    <option value="Informatika" <?php echo $pilih_if ?>>Informatika</option>
                </select>
            </div>
            <div class="d-flex justify-content-end ">     
            <button type="submit" class="btn btn-warning ">Ubah</button>
            </div>
        </form>
    </div>
    
</body>
</html>