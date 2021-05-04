<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040028</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis." rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No pesanan</th>
                <th>Gambar</th>
                <th>Nama pemesan </th>
                <th>Informasi Produk</th>
                <th>Jenis prodek </th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($secret as $lightstick) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="220px" src="assets/<?= $lightstick['img']; ?>" alt=""></td>
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
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>