<!DOCTYPE html>
<html lang="en">

<style>
.title {
    margin: 0px;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $style ?>
    <title><?= $game[0]['Nama_Barang']?></title>
</head>
<body>
    <?= $nav ?>
    <div class="ui container" id="main" style="font-family: 'Quicksand', sans-serif;">
        <div class="ui grid centered tablet">
                <div class="twelve wide mobile six wide tablet five wide computer stackable column">
                    <div class="ui rounded image">
                        <img class="" src="<?= base_url("/assets/uploads/poster/".$game[0]['Gambar'])?>" alt="Image not found">
                    </div>
                </div>
                <div class="twelve wide mobile ten wide tablet eleven wide computer stackable column">
                    <div class="row">
                        <h1 class="ui header inverted"><?= $game[0]['Nama_Barang']?></h1>
                    </div><br>
                    <div class="row">
                        <a class="ui tag red label"><?= $kategori[0]['Deskripsi']?></a>
                    </div><br>
                    <div class="row">
                        <p style="font-size: 18px;" class="inverted  "><?= $game[0]['Deskripsi']?></p>
                    </div><br>
                    <br>
                    <div class="ui grid">
                        <div class="ten wide computer sixteen wide mobile center aligned column" style="background-color: #222831; border-radius: 5px;">
                        <div class="ui grid">
                            <div class="eight wide column">
                                <h1 style="font-weight: normal;">IDR <?= number_format($game[0]['Harga'])?></h1>
                            </div>
                            <div class="eight wide column">
                                <a href="#" class="ui right labeled green icon button"><i class="cart plus icon"></i>Add to Cart</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <br><br>
        <div class="ui container center aligned">
            <h2 class="">You may also like</h2>
        </div>
        <div class="ui center aligned grid">
                <?php foreach($recommend as $item) {?>
                <div class="eight wide mobile four wide tablet four wide computer stackable column left aligned">
                    <br>
                    <div class="row">
                        <div class="ui fluid teal card" style="background-color: #222831; box-shadow: none;">
                            <div class="image">
                                <img class="img-recommend" id="poster" src="<?= base_url('assets/uploads/poster/'.$item['Gambar']) ?>">
                            </div>
                            <div class="content">
                                <a href="<?= base_url('index.php/base/details/'.$item['Id']) ?>" class="ui header" style="color: white; height: 50px; font-weight: normal;"><?= $item['Nama_Barang'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>