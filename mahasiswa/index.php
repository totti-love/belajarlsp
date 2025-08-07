<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid col-11">

        <div class="mt-4 p-4 bg-primary text-white rounded">
            <h1>Kampus Inovasi</h1>
        </div>    
        <p class="h3 mt-3">Daftar Mahasiswa</p>

        <a href="tambah.php" type="button"class="btn btn-primary">Tambah</a>
        
        <table class="table">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
                <th>Foto</th>
                <th>Beasiswa</th>
                <th>Aksi</th>
            </tr>

            <?php
                include("koneksi.php");
                $perintah = "SELECT npm, nama, jns_kel, prodi, foto, beasiswa FROM tblmhs";
                $eksekusi = mysqli_query($konek,$perintah);

                if($eksekusi){
                    $i=1;
                    while($ambildata = mysqli_fetch_array($eksekusi)){
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $ambildata["npm"]; ?></td>
                            <td><?php echo $ambildata["nama"]; ?></td>
                            <td><?php echo $ambildata["jns_kel"]; ?></td>
                            <td><?php echo $ambildata["prodi"]; ?></td>
                            <td>
                                <?php if(!empty($ambildata["foto"])): ?>
                                    <img src="uploads/<?php echo $ambildata["foto"]; ?>" width="50" height="50" alt="Foto">
                                <?php else: ?>
                                    <span>Tidak ada foto</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $ambildata["beasiswa"]; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm"href="ubah.php?kirim=<?php echo $ambildata["npm"]; ?>">Ubah</a>
                                <a class=" btn btn-danger btn-sm" href="proses-hapus.php?kirim=<?php echo $ambildata["npm"]; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    $eksekusi->free_result();
                }

                $konek->close();
                ?>
        </table>
    </div>
    
</body>
</html>