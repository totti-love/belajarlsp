<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
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
        <p class="h3 mt-3">Tambah Data Mahasiswa</p>

        <a href="index.php" type="button"class="btn btn-secondary">Kembali</a>

        <form action="proses-tambah.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="npm" class="form-label">NPM :</label>
                <input type="text" class="form-control" id="npm" placeholder="Masukkan Nomor Pengenal Mahasiswa" name="npm" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jns_kel">Jenis Kelamin :</label>
                <div class="d-flex gap-3 mb-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="LK" name="jns_kel" value="LK" checked>Laki-laki
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="PR" name="jns_kel" value="PR">Perempuan
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi :</label>
                <select class="form-select" id="prodi" name="prodi">
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Informatika">Informatika</option>
                </select>
            </div>
            <!-- Tambahan input foto -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto :</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>
            <!-- Tambahan checkbox beasiswa -->
            <div class="mb-3">
                <label class="form-label">Beasiswa :</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="beasiswa" name="beasiswa" value="Ya">
                    <label class="form-check-label" for="beasiswa">Mahasiswa penerima beasiswa</label>
                </div>
            </div>
            <div class="d-flex justify-content-end ">     
            <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
        </form>
    </div>

    
</body>
</html>