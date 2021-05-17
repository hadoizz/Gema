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
                <div class="twelve wide mobile twelve wide tablet fourteen wide computer column">
                    <h5><?= $item['Nama_Barang'] ?></h5>
                    <p>IDR <?= number_format($item['Harga']) ?></p>
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