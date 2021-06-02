<!DOCTYPE html>
<html lang="en">

<style>
.title {
    margin: 0px;
}

* {
  box-sizing: border-box;
}

.bg-img {
    background-image: url("<?php echo base_url("/assets/background/".$game[0]['Background'])?>");
    height: 120%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}

.bg-lapis-2{
    background-position: center;
    justify-content: center;
    display: flex;
    padding-top: 100px;
}

.bg-text {
    background-color: rgba(0,0,0, 0.2); 
    color: white;
    backdrop-filter: blur(8px);
    width: 80%;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
    display: flex;
    box-shadow: 0px 10px 20px 0 rgba(0, 0, 0, 1);
    display: block;
}

@media only screen and (max-width: 767px){
    .ui.container {
        margin-top: 300px;
    }
}

@media only screen and (max-width: 540px) and (max-height: 720px) {
    .ui.container {
        margin-top: 600px;
    }
}

@media only screen and (max-width: 450px) and (max-height: 850px) {
    .ui.container {
        margin-top: 650px;
    }
}

@media only screen and (max-width: 450px) and (max-height: 750px) {
    .ui.container {
        margin-top: 650px;
    }
}

@media only screen and (max-width: 360px){
    .ui.container {
        margin-top: 600px;
    }
}

@media only screen and (max-width: 375px) and (max-height: 667px) {
    .ui.container {
        margin-top: 800px;
    }
}
@media only screen and (max-width: 360px) and (max-height: 640px) {
    .ui.container {
        margin-top: 900px;
    }
}

@media only screen and (max-width: 320px){
    .ui.container {
        margin-top: 800px;
    }
}

@media only screen and (max-width: 320px) and (max-height: 600px) {
    .ui.container {
        margin-top: 1150px;
    }
}

@media only screen and (max-width: 280px) and (max-height: 655px) {
    .ui.container {
        margin-top: 1050px;
    }
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
    <div class="bg-img">
        <div class="bg-lapis-2">
            <div class="ui grid centered bg-text">
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
                        <a href="<?= base_url('index.php/Base/showBy/').$kategori[0]['Id'] ?>" class="ui tag red label"><?= $kategori[0]['Deskripsi']?></a>
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
                                <a href="<?= base_url('index.php/customer/addToCart/'.$game[0]['Id'])?>" class="ui right labeled green icon button"><i class="cart plus icon"></i>Add to Cart</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="ui container" id="main" style="font-family: 'Quicksand', sans-serif;">
        <div class="ui container center aligned" style="margin-top: 0px;">
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