<div class="ui modal inverted">
    <div class="header"><?= $_SESSION['cart'] ?> Item</div>
    <div class="scrolling content">
        <?php if(count($items) == 0) echo "Your cart is empty";
        else{foreach($items as $item ){?>
            <p><?= $item['Id_Barang'] ?></p>
            <div class="ui divider"></div>
        <?php }?>
        <?php }?>
    </div>
</div>