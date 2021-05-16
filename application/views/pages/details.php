<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $style ?>
    <title><?= $game[0]['Nama_Barang']?></title>
</head>
<body>
    <?= $nav ?>
    <div class="ui container" id="main">
        <h1><?= $game[0]['Nama_Barang']?></h1>
        <h2><?= number_format($game[0]['Harga'])?></h2>
        <p><?= $game[0]['Deskripsi']?></p>
        
        <img width="100px" src="<?= base_url("/assets/uploads/poster/".$game[0]['Gambar'])?>" alt="Image not found">
        <p><?= $kategori[0]['Deskripsi']?></p>

        <h2>Recommended Games</h2>
        <?php foreach($recommend as $item) {?>
            <h2><?= $item['Nama_Barang'] ?></h2>
        <?php } ?>
    </div>
</body>
</html>