<?php

include '../../config/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_kategori WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo "
    <script>
        alert('Berhasil dihapus');
        window.location.href = 'index_kategori.php';
    </script>
    ";
}

else {
    echo "<script>
    alert('Gagal hapus data');
    window.location.href = 'index_kategori.php';
    </script>
";
}




?>