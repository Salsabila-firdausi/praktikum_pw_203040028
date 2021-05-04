<?php 
$secret number = [
    "Dita Karang" => "Indonesia",
    "Lea" => "Jepang",
    "Soodam" => "Korea",
    "Denise" => "Amerika",
    "jinnyS" => "Amerika",
 
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c 203040028</title>
    <style>
        .table {
            font-size: 15px;
            border: 2px solid black;
            padding: 10px;
            width: 30%;
            font-family: arial;
        }
    </style>
</head>
<body>
    <div class="table">
        <h3>Daftar lagu</h3>
        <table>
            <?php foreach($album as $plagu=> $club) : ?>
                <td><b><?= $palbum; ?></b></td>
                <td>:</td>
                <td><?= $secret; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    
</body>
</html>