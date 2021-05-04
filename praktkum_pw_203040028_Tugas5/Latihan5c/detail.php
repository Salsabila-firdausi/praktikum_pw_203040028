<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040028</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img width="220px" src="../assets/<?= $lightstick["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $lightstick["nama"]; ?></p>
            <p><?= $lightstick["informasi_produk"]; ?></p>
            <p><?= $lightstick["jenis"]; ?></p>
            <p>Rp. <?= $lightstick["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>