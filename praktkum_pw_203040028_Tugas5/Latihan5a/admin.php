<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040028</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="trrhjnhjigkeqj" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No pesansn</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama pemesan</th>
                <th>Informasi Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($secret as $lightstick) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href=""><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="220px" src="../assets/<?= $lightstick['img']; ?>" alt=""></td>
                <td><?= $lightstick['nama pemesan']; ?></td>
                <td><?= $lightstick['informasi_produk']; ?></td>
                <td><?= $lightstick['jenis prodk']; ?></td>
                <td><?= $lightstick['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>

</html>