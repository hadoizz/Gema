<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $kategori[0]['Deskripsi'] ?></title>
    <?= $style ?>
</head>

<body>
    <?= $nav ?>
    <div class="ui container" id="main">
        <?= $alert ?>
        <div class="ui center aligned grid">
            <div class="sixteen wide column">
                <div class="ui horizontal inverted divider"><?= $kategori[0]['Deskripsi'] ?> Games</div>
            </div>
            <?php echo $showGames; ?>
        </div>
    </div>
    <?= $footer ?>
</body>

</html>