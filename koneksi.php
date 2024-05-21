<?php
$koneksi = new mysqli(
    "localhost",
    "root",
    "",
    "db_pplg4"
);

if ($koneksi->connect_error) {
    echo $koneksi->error;
}else{
    // echo "Koneksi Berhasil";
}

function url(){
    return sprintf(
      "%s://%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME']
    );
  }

?>