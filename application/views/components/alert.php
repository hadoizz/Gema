<?php if (isset($_GET['success'])) { 
    if($_GET['success'] == 'true') {?>
        <div class='ui green message'>
            <i class="close icon"></i>
            <div class='header'>
                Success
            </div>
            <p>Added to cart successfully</p>
        </div>
<?php }else{ ?>
        <div class='ui yellow message'>
            <i class="close icon"></i>
            <div class='header'>
                Warning
            </div>
            <p>This item is already in the cart</p>
        </div>
    <?php } ?>
<?php }else if(isset($_GET['delete'])) { ?> 
        <div class='ui red message'>
            <i class="close icon"></i>
            <div class='header'>
                Success
            </div>
            <p>Item removed from cart</p>
        </div>
<?php }else if(isset($_GET['order'])) {?>
        <div class='ui green message'>
            <i class="close icon"></i>
            <div class='header'>
                Success
            </div>
            <p>Order created successfully</p>
        </div>
<?php } ?>
