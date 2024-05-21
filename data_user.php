<?php 
$nama = "Ferdian Dwi Nugroho";
$profesi = "Teacher";

$services = [
    [
        "icon" => "icon ti-crown",
        "name" => "UI/UX Design"
    ],
    [
        "icon" => "icon ti-desktop",
        "name" => "Web Design"
    ],
    [
        "icon" => "icon ti-mobile",
        "name" => "App Design"
    ],
    [
        "icon" => "icon ti-bar-chart",
        "name" => "SEO"
    ],
    [
        "icon" => "ti-panel",
        "name" => "Config"
    ],
    [
        "icon" => "ti-gallery",
        "name" => "Photograph"
    ],
    [
        "icon" => "ti-target",
        "name" => "Assasination"
    ],
    [
        "icon" => "ti-reload",
        "name" => "Reset People Life"
    ],
    [
        "icon" => "ti-thumb-down",
        "name" => "Dislike Spammer"
    ],
    [
        "icon" => "ti-thumb-down",
        "name" => "Dislike Spammer"
    ],
    [
        "icon" => "ti-thumb-down",
        "name" => "Dislike Spammer"
    ],
    [
        "icon" => "ti-thumb-down",
        "name" => "Dislike Spammer"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Steller Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/imgs/logo.svg" alt=""></a>
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
        include_once 'koneksi.php';
        $data = $koneksi->query("
            SELECT * FROM user
        ");
    ?>
        <a href="user_add.php" class="btn btn-success mb-3">Tambah Data User</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                foreach ($data as $item) {
            ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['nama'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td>
                        <a href="user_edit.php?id=<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="handler_user.php" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </section>
    </div>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="assets/js/steller.js"></script>

</body>
</html>
