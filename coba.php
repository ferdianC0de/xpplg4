<?php
// echo "Hello, world";

$AngkaGenap = "AngkaGenap";
$BuahBuahan = Array("Apple", "Banana", "Grape");
$arr = [1, 2, 3, 4, 5, 6];

$nama = "Ferdian Dwi";
$alamat = "Depok";

$instagram = "";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Saya <?php echo $nama ?></h1>

    <ul>
        <?php 
        
        foreach ($BuahBuahan as $Buah) {
            if ($Buah == "Banana") {
                continue;
            }
           echo "<li> $Buah </li>";
        }

        ?>
    </ul>

    <h3>
    <?php echo $nama ?>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </h3>
</body>
</html>