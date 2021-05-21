<!--Start: Nav  -->
<div class="ui inverted fixed borderless medium menu" id="navigation">
    <div class="ui container fluid grid">
        <!--Start: Desktop Nav-->
        <div class="computer tablet only row" >
            <a class="header item" href="<?= base_url() ?>">
                <div class="ui image" style="width: 110px;">
                    <img src="<?= base_url('/assets/img/logo1.png') ?>">
                </div>
            </a>
            <a href="<?= base_url('index.php/Base/showBy/1') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/1')) echo "active";?>">PC</a>
            <a href="<?= base_url('index.php/Base/showBy/2') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/2')) echo "active";?>">XBOX</a>
            <a href="<?= base_url('index.php/Base/showBy/3') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/3')) echo "active";?>">PS5</a>
            <a href="<?= base_url('index.php/Base/showBy/4') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/4')) echo "active";?>">PS4</a>
            <a href="<?= base_url('index.php/Base/showBy/5') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/5')) echo "active";?>">PS3</a>
            <a href="<?= base_url('index.php/Base/showBy/6') ?>" class="item <?php if(current_url() == base_url('index.php/Base/showBy/6')) echo "active";?>">PS2</a>

            
            
            <div class="right menu">
                <a href="<?php echo base_url('index.php/base/aboutUs') ?>" class="item <?php if(current_url() == base_url('index.php/base/aboutUs')) echo "active";?>">About Us</a>
                <?php if(isset($_SESSION['role'])){?>
                    <a class="item" id="cart">
                        <div class="ui teal button"><i class="shopping cart icon"></i><?= $_SESSION['cart'] ?></div>
                    </a>
                <?php } ?>
                
                <div class="ui icon top right dropdown item" ><i class="user icon"></i> 
                    <div class="menu">
                        <?php if(!isset($_SESSION['role'])){ ?>    
                            <div class="item" >
                                <a href="<?= base_url('index.php/Login') ?>" style="color: black;">Login</a>
                            </div>
                        <?php }else{ ?>
                            <div class="item active">
                                <?= "Hi, ".$_SESSION['email'] ?>
                            </div>
                            <div class="item" >
                                <a href="<?= base_url('index.php/Customer/orderHistory') ?>" style="color: black;">Order history</a>
                            </div>
                            <div class="item" >
                                <a href="<?= base_url('index.php/Login/logOut') ?>" style="color: black;">Logout</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!--End: Desktop Nav-->
        
        <!--Start: Mobile Nav-->
        <div class="mobile only column row" >
            <div class="left menu">
                <a class="menu item">
                    <div class="ui secondary icon toggle button">
                        <i class="content icon"></i>
                    </div>
                </a>
            </div>
            <a class="header item" href="<?= base_url() ?>">
                <div class="ui image" style="width: 110px;">
                    <img src="<?= base_url('/assets/img/logo1.png') ?>">
                </div>
            </a>
            <?php if(isset($_SESSION['role'])){?>
            <div class="right menu">
                <a class="item" id="cart2">
                    <div class="ui teal button"><i class="shopping cart icon"></i><?= $_SESSION['cart'] ?></div>
                </a>
            </div>
            <?php } ?>
            <div class="ui icon top right pointing dropdown item"><i class="user icon"></i>
                <div class="menu">
                    <?php if(!isset($_SESSION['role'])){ ?>    
                        <div class="item" >
                            <a href="<?= base_url('index.php/Login') ?>" style="color: black;">Login</a>
                        </div>
                    <?php }else{ ?>
                        <div class="item active">
                                <?= "Hi, ".$_SESSION['email'] ?>
                            </div>
                        <div class="item" >
                            <a href="<?= base_url('index.php/Customer/orderHistory') ?>" style="color: black;">Order history</a>
                        </div>
                        <div class="item" >
                            <a href="<?= base_url('index.php/Login/logOut') ?>" style="color: black;">Logout</a>
                        </div>
                    <?php }?>
                </div>
            </div>
            
            <div class="ui vertical accordion borderless fluid menu" style="background-color: #393e46;">
                <a href="<?= base_url('index.php/Base/showBy/1') ?>" class="item">PC</a>
                <a href="<?= base_url('index.php/Base/showBy/2') ?>" class="item">XBOX</a>
                <a href="<?= base_url('index.php/Base/showBy/3') ?>" class="item">PS5</a>
                <a href="<?= base_url('index.php/Base/showBy/4') ?>" class="item">PS4</a>
                <a href="<?= base_url('index.php/Base/showBy/5') ?>" class="item">PS3</a>
                <a href="<?= base_url('index.php/Base/showBy/6') ?>" class="item">PS2</a>
                <a href="<?php echo base_url('index.php/base/aboutUs') ?>" class="item">About Us</a>
            </div>
            <!--End: Mobile Nav-->
        </div>
    </div>
    <!--End: Nav  -->
</div>
<?php if(isset($_SESSION['role'])){
    echo $cart;
} ?>

<script>
$(document).ready(function() {
    $('.ui.vertical.menu').toggle("close");
    $('.ui.dropdown').dropdown();
    $('.ui.toggle.button').click(function() {
        $('.ui.vertical.menu').toggle("250", "linear")
    });
});
</script>

