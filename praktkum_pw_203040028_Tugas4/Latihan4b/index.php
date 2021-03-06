<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-7">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salsabila firdausi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    img {
        max-width: 600px;
    }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No pemesan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama pemesan</th>
                <th scope="col">Informasi Produk</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;
            foreach ($hijab as $kudung):
                ?>
            <tr>
                <th scope="row"><?=$i?></th>
                <td><img width="300px" src="assets/<?= $kudung["img"] ?>" alt="foto"></td>
                <td><?= $kudung["nama pemesan"]?> </td>
                <td><?= $kudung["informasi produk"]?> </td>
                <td><?= $kudung["jenis produk"]?> </td>
                <td>Rp. <?= $kudung["harga"]?> </td>
            </tr>
            <?php
            $i++;
            endforeach;
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>