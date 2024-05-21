<?php
// header('Content-Type: text/plain; charset=utf-8');
include_once '../koneksi.php';


if (isset($_POST['add_produk'])) {
    $nama_produk = $_POST['nama'];
    $gambar_produk = $_FILES['gambar'];
    
    $deskripsi_produk = $_POST['deskripsi'];
    $rename = md5(date("Y-m-d H:i:s"));
    
    $gambar = move_uploaded_file($gambar_produk['tmp_name'], '../assets/gambar_produk/'.$rename);
    $nama_gambar = $rename;

    $sql = "INSERT INTO produk (nama_produk, gambar_produk, deskripsi_produk) values ('$nama_produk', '$nama_gambar', '$deskripsi_produk')";
    $insert = $koneksi->query($sql);

    if (!$insert) {
        echo "Gagal Insert";
    }else{
        echo "Berhasil Insert";
        header('Location: ./');
    }


}

if (isset($_GET['edit'])) {
    # code
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $get =  $koneksi->query("select gambar_produk from produk where id = $id")->fetch_assoc();
    $filepath = '../assets/gambar_produk/'.$get['gambar_produk'];
    $file_exist = file_exists($filepath);

    if ($file_exist) {
        unlink($filepath);
    }

    $sql = "DELETE from produk where id = $id";
    $delete= $koneksi->query($sql);

    if (!$delete) {
        echo "Gagal Insert";
    }else{
        echo "Berhasil Insert";
        header('Location: ./');
    }
}


?>