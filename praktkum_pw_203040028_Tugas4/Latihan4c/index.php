<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>secret number</title>
</head>

<body>
    <div class="container">
        <div class="grid">
            <div class="row">
                <?php 
            foreach ($secretnumber as $lightstick) :
            ?>
                <div class="cell-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img style="width: 100%;" src="assets/<?= $lightstick1['img'] ?>">
                        </div>
                        <div class="card-content p-2">
                            <a class="text-center"
                                href="php/detail.php?id=<?= $lightstick2["id"] ?>"><?= $sc1"nama"] ?> </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://www.youtube.com/watch?v=ljdwsoYTq7I"></script>
</body>

</html>