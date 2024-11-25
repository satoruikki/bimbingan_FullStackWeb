<?php


include 'koneksi.php';

if (isset($_GET['Stambuk'])) {
    $stambuk = $_GET['Stambuk'];
    $sql = "SELECT * FROM tb_mahasiswa WHERE Stambuk = '$stambuk' ";
    $query = $koneksi->query($sql);

    $data = $query->fetch_assoc();
}




if (isset($_POST['submit'])) {
    $stambuk = $_POST['Stambuk'];
    $nama = $_POST['Nama'];
    $jurusan = $_POST['Jurusan'];
    $alamat = $_POST['Alamat'];
    $tgl_lahir = $_POST['Tanggal_lahir'];

    $stambuk_lama = $_GET['Stambuk'];
    $sql = "
        UPDATE tb_mahasiswa SET 
        Nama = '$nama' , 
        Stambuk = '$stambuk' , 
        Jurusan = '$jurusan' , 
        Alamat = '$alamat' , 
        Tanggal_lahir = '$tgl_lahir' 
            WHERE stambuk = '$stambuk_lama'
    ";
    if ($koneksi->query($sql) === TRUE) {
        echo "
           <script>
                alert('Data berhasil di update');
                window.location.href = 'index.php';
           </script>
        ";
    } else {
        echo "
           <script>
                alert('$koneksi->error');
           </script>
        ";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container-md">
        <h1 class="text-center mt-5">Form Edit</h1>

        <form method="POST" action="">

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stambuk</label>
                        <input maxlength="6" type="text" value="<?= $data['Stambuk'] ?>" name="Stambuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="Nama" value="<?= $data['Nama'] ?>" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <select name="Jurusan" class="form-control" id="">
                            <option value="" disabled>-- pilih jurusan --</option>
                            <option <?= $data['Jurusan'] == 'TI' ? 'selected' : '' ?> value="TI">TI</option>
                            <option <?= $data['Jurusan'] == 'SI' ? 'selected' : '' ?> value="SI">SI</option>
                            <option <?= $data['Jurusan'] == 'RPL' ? 'selected' : '' ?> value="RPL">RPL</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="Alamat" class="form-control"
                            value="<?= $data['Alamat'] ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
                        <input type="date" name="Tanggal_lahir" value="<?= $data['Tanggal_lahir'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="index.php">Kembali</a>

        </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>