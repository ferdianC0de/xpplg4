<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Steller Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="../assets/css/steller.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../assets/imgs/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="components.php">Copmonents</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->
    <div class="container">

    
    <section class="section mt-5">
    <?php
        include_once '../koneksi.php';
        $data = $koneksi->query("
            SELECT * FROM produk
        ");
    ?>
        <a href="add.php" class="btn btn-success mb-3">Tambah Data Produk</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
            <?php
                foreach ($data as $item) {
            ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td>
                        <img src="<?= url().'/xpplg4/assets/gambar_produk/'.$item['gambar_produk'] ?>" alt="" width="100px">
                    </td>
                    <td><?php echo $item['nama_produk'] ?></td>
                    <td><?php echo $item['deskripsi_produk'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="handler.php?delete=<?= $item['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </section>
    </div>
	
	<!-- core  -->
    <script src="../assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="../assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="../assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="../assets/js/steller.js"></script>

</body>
</html>
