<div class="ui modal ">
    <div class="header">Your cart: <?= $_SESSION['cart'] ?> Item</div>
    <div class="scrolling content">
        <?php if(count($items) == 0) {
            echo "Your cart is empty";
            $total = 0;

        }else{
            $total = 0;
            foreach($items as $item ){?>
            <?php $total += $item['Harga'];?>
            <div class="ui grid">
                <div class="four wide mobile two wide computer column">
                    <div class="ui fluid rounded image">
                        <img id="poster" src="<?= base_url('assets/uploads/poster/'.$item['Gambar']) ?>">
                    </div>
                </div>
                <div class="eight wide mobile eight wide tablet twelve wide computer column">
                    <h5><?= $item['Nama_Barang'] ?></h5>
                    <p>IDR <?= number_format($item['Harga']) ?></p>
                </div>
                <div class="four wide mobile four wide tablet two wide computer column middle aligned content">
                    <a href="<?= base_url('index.php/customer/deleteCart/'.$item['Id'])?>" class="ui icon red button" data-tooltip="Remove from cart" data-position="left center">
                        <i class="trash icon"></i>
                    </a>
                </div>
            </div>
            <div class="ui divider"></div>
        <?php }?>
        <?php }?>
    </div>
    <div class="actions">
        <div class="ui grid left aligned">
            <div class="eight wide column">
                <h3>Total: IDR <?= number_format($total) ?></h3>
            </div>
            <div class="eight wide column right aligned">
                <a href="#" class="ui green button <?php if($total == 0) echo "disabled"; ?>">Checkout</a>
            </div>
        </div>
    </div>
</div>
