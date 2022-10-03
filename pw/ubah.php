<?php
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

$id = $_GET["id"];
$b = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Diubah');
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
        <h3 class="text-center fw-bold">Form Ubah Data Buku</h3>
        <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" required value="<?= $b['judul']; ?>">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" required value="<?= $b['penulis']; ?>">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" required value="<?= $b['penerbit']; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" required value="<?= $b['harga']; ?>">
            </div>
            <div class="mb-3">
                <label for="halaman" class="form-label">Halaman</label>
                <input type="text" class="form-control" id="halaman" required value="<?= $b['halaman']; ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" required value="<?= $b['genre']; ?>">
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" id="bahasa" required value="<?= $b['bahasa']; ?>">
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <div>
                    <input name="cover" id="cover" type="file" required value="<?= $b['cover']; ?>">
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