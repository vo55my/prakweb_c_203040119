<?php
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Toko Buku Cerdas</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center fw-bold">Form Tambah Data Buku</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga">
            </div>
            <div class="mb-3">
                <label for="halaman" class="form-label">Halaman</label>
                <input type="text" class="form-control" id="halaman">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre">
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" id="bahasa">
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <div>
                    <input name="cover" id="cover" type="file" required>
                </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Selesai</button>
            <button type="submit" class="btn btn-danger">
                <a href="index.php" class="text-decoration-none text-light">Kembali</a>
            </button>
        </form>
    </div>
</body>

</html>