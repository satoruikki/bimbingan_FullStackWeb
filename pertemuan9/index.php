<?php

include "koneksi.php";

// var_dump($koneksi);

$sql = 'SELECT * FROM tb_mahasiswa';
$hasil = mysqli_query($koneksi, $sql);

// var_dump($hasil);

// if (mysqli_num_rows($hasil) > 0) 
// {
//     while($row = mysqli_fetch_assoc($hasil))
//     {
//         echo "Nama : ". $row['Nama'] . " | Stambuk " . $row["Stambuk"] ."<br>";
//     }
// }
// else
// {
// echo "Data tidak ada";
// }


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pertemuan 9 - MySQL dan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center">Data Mahasiswa</h1>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Stambuk</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($hasil) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($hasil)):
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?= $row['Stambuk'] ?></td>
                            <td><?= $row['Nama'] ?></td>
                            <td><?= $row['Jurusan'] ?></td>
                            <td><?= $row['Alamat'] ?></td>
                            <td><?= $row['Tanggal_lahir'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6" class="text-center">Data Tidak ada</td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>