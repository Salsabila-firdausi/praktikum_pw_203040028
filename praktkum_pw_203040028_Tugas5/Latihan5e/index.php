<?php 
require 'php/functions.php';
$Hijab = query("SELECT * FROM hijab");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Hijab = query("SELECT * FROM hijab WHERE
            `nama` LIKE '%$keyword%' OR
            `informasi_produk` LIKE '%$keyword%' OR
            `jenis` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $Hijab = query("SELECT * FROM hijab");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040028</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https:leapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No pesanan </th>
                <th>Gambar</th>
                <th>Nama pemesan</th>
                <th>Informasi Produk</th>
                <th>Jenis produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($lightstick)) : ?>
            <tr>
                <td colspan="8">
                    <h1>lightstick  tdak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($lightstick as $lightstick) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="220px" src="assets/<?= $li['img'
            ]; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $lightstick['id']; ?>">
                        <?= $lightstick["nama"]; ?>
                    </a>
                </td>
                <td><?= $lightstick['informasi_produk']; ?></td>
                <td><?= $lightstick['jenis']; ?></td>
                <td><?= $lightstick['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>