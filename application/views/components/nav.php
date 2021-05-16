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
            <a class="item">PC</a>
            <a class="item">PS2</a>
            <a class="item">PS3</a>
            <a class="item">PS4</a>
            <a class="item">PS5</a>
            <a class="item">XBOX</a>
            
            <div class="right menu">
                <a class="item">About Us</a>
                <div class="ui icon top right pointing dropdown item"><i class="user icon"></i>
                    <div class="menu">
                        <?php if(!isset($_SESSION['role'])){ ?>    
                            <div class="item" >
                                <a href="<?= base_url('index.php/Login') ?>" style="color: black;">Login</a>
                            </div>
                        <?php }else{ ?>
                            <div class="item" >
                                <a href="#" style="color: black;">Order history</a>
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
            <div class="ui icon top right pointing dropdown item"><i class="user icon"></i>
                    <div class="menu">
                        <?php if(!isset($_SESSION['role'])){ ?>    
                            <div class="item" >
                                <a href="<?= base_url('index.php/Login') ?>" style="color: black;">Login</a>
                            </div>
                        <?php }else{ ?>
                            <div class="item" >
                                <a href="#" style="color: black;">Order history</a>
                            </div>
                            <div class="item" >
                                <a href="<?= base_url('index.php/Login/logOut') ?>" style="color: black;">Logout</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <div class="ui vertical accordion borderless fluid menu" style="background-color: #393e46;">
                <a class="item">PC</a>
                <a class="item">PS2</a>
                <a class="item">PS3</a>
                <a class="item">PS4</a>
                <a class="item">PS5</a>
                <a class="item">XBOX</a>
                <a class="item">About Us</a>
            </div>
            <!--End: Mobile Nav-->
        </div>
    </div>
    <!--End: Nav  -->
</div>
<script>
    $(document).ready(function() {
        $('.ui.vertical.menu').toggle("close");
        $('.ui.dropdown').dropdown();
        $('.ui.toggle.button').click(function() {
            $('.ui.vertical.menu').toggle("250", "linear")
        });
    });
</script>