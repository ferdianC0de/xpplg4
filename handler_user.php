<?php
include_once 'koneksi.php';

if (isset($_POST['add_user'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = $koneksi->query("INSERT INTO user 
    (id, nama, email, password) 
    valuesv
    ($id, '$nama', '$email', '$password')
    ");

    if ($insert) {
        header("Location: data_user.php");
    }
}

if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = $koneksi->query("UPDATE user set 
    nama='$nama',  
    email='$email', 
    password = '$password'
    where id = $id
    ");

    if ($update) {
        header("Location: data_user.php");
    }
}

?>