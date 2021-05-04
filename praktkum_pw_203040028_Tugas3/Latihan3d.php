<?php 
$Secret number = [
    [
        "nama"=>"Dita Karang",
        "Negara"=>"Indonesia",
        "Umur "=>24tahun,
        "Tinggi"=>1,66,
       
    ],
    [
        "nama"=>"Soodam",
        "Negara"=>"korea selatan",
        "Umur "=>21tahun,
        "Tinggi"=>1,67,
       
    ],
    [
        "nama"=>"Lea",
        "Negara"=>"Jepang",
        "Umur "=>25tahun,
        "Tinggi"=>1,70,
       
    ],
    [
        "nama"=>"Jinny",
        "Negara"=>"Amerika",
        "Umur "=>23tahun,
        "Tinggi"=>1,65,
       
    ],
    [
        "nama"=>"Dnise",
        "Negara"=>"Amerika",
        "Umur "=>20tahun,
        "Tinggi"=>1,71,
       
    ],

];

$totalDebut = 0;
$totalLagu = 0;
$totalARtis = 0;
for($i=0; $i<count($secret number); $i++){
    $totalMain += $Secret number[$i]["jumlah Debut"];
    $totalGol += $Secret number[$i]["jumlah lagu "];
    $totalAssist += $ecret number [$i]["jumlah artis"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d 203040028</title>
    <style>
        table, th, td{
            border: 1px solid pink;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>GROUP</th>
            <th>DEBUT</th>
            <th>LAGU</th>
            <th>ARTIS</th>
        </tr>
        <?php foreach ($girlsband as $urutan => $pemaisecretnumber) : ?>
            <tr>
                <td><?= $urutan+1; ?></td>
                <td><?= $pemain["nama"]; ?></td>
                <td><?= $pemain["group"]; ?></td>
                <td><?= $pemain["jumlah debut "]; ?></td>
                <td><?= $pemain["jumlah lagu"]; ?></td>
                <td><?= $pemain["jumlah artis"]; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $totalDebut; ?></td>
            <td><?= $totalLagu; ?></td>
            <td><?= $totalArtis; ?></td>
        </tr>
    </table>
</body>
</html>