<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <?= $style ?>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-weight: normal;
        }
    </style>
</head>

<body>
    <?= $nav ?>
    <div class="ui container" id="main">
        <?php
        foreach ($orders as $order) {
            $total = 0;
        ?>
            <div class="ui inverted segment">
                <h1 style="text-align: center;">ID Order: <?= $order['Id_Order'] ?></h1>
                <div class='ui divider'></div>
                <?php
                foreach ($detailOrder as $item) {
                    if ($item['Id_Order'] ==  $order['Id_Order']) {
                        $total += $item['Harga'];
                ?>
                        <div class="ui grid">
                            <div class="five wide mobile five wide tablet three wide computer column">
                                <div class="ui small rounded image">
                                    <img id="poster" src="<?= base_url('assets/uploads/poster/' . $item['Gambar']) ?>">
                                </div>
                            </div>
                            <div class="ten wide mobile five wide tablet twelve wide computer column middle aligned">
                                <h3><?= $item['Nama_Barang'] ?></h3>
                                <p>IDR <?= number_format($item['Harga']) ?></p>
                            </div>
                        </div>
                <?php   }
                }
                ?>
                <div class='ui divider'></div>
                <h3 style="text-align: center;">Total: IDR <?= number_format($total) ?> </h3>
                <div class='ui divider'></div>
                <div class="ui centered column grid">
                    <div class="sixteen wide column center aligned">Status:</div>
                    <div class="ui mini tablet ordered steps">
                        <div class="completed step">
                            <div class="content">
                                <div class="title">Sedang Dikirim</div>
                                <div class="description">Pesanan dalam perjalanan</div>
                            </div>
                        </div>
                        <div class="<?php if($order['Status'] == 1) echo "active"; else echo"completed";?> step">
                            <div class="content">
                                <div class="title">Sudah Dikirim</div>
                                <div class="description">Pesanan telah sampai</div>
                            </div>
                        </div>
                        <div class="<?php if($order['Status'] == 2) echo "active"; if($order['Status'] >2) echo "completed"; ?> step">
                            <div class="content">
                                <div class="title">Siap di Pick-up</div>
                                <div class="description">Pesanan diambil kembali</div>
                            </div>
                        </div>
                        <div class="step <?php if($order['Status'] == 3) echo "active"; if($order['Status'] >4) echo "completed"; ?>">
                            <div class="content">
                                <div class="title">Selesai</div>
                                <div class="description">Pesanan Selesai</div>
                            </div>
                        </div>
                    </div>
                    <?php if($order['Status'] == 2){  ?>
                        <div class="sixteen wide column center aligned">
                            <a href="<?= base_url('index.php/Customer/changeStatus/'.$order['Id_Order'])?>" class="ui green button"> Siap di Pick-Up</a>
                        </div>
                    <?php }else echo "<br>";  ?>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>