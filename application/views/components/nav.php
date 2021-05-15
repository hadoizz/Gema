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
                <a class="item">Login</a>
                <a class="item">About Us</a>
            </div>
        </div>
        <!--End: Desktop Nav-->
        
        <!--Start: Mobile Nav-->
        <div class=" mobile only row" >
            <a class="header item" href="<?= base_url() ?>">
                <div class="ui image" style="width: 110px;">
                    <img src="<?= base_url('/assets/img/logo1.png') ?>">
                </div>
            </a>
            <div class="right menu">
                <a class="menu item">
                    <div class="ui teal icon toggle button">
                        <i class="content icon"></i>
                    </div>
                </a>
            </div>
            <div class="ui vertical accordion borderless fluid menu" style="background-color: #393e46;">
                <a class="item">PC</a>
                <a class="item">PS2</a>
                <a class="item">PS3</a>
                <a class="item">PS4</a>
                <a class="item">PS5</a>
                <a class="item">XBOX</a>
                <a class="item">Login</a>
                <a class="item">About Us</a>
            </div>
            <!--End: Mobile Nav-->
        </div>
    </div>
    <!--End: Nav  -->
</div>
<script>
    $(document).ready(function() {
        $('.computer.only .dropdown.item')
            .popup({
            inline     : true,
            hoverable  : true,
            position   : 'bottom left',
            delay: {
                show: 300,
                hide: 800
            }
            })
        ;
        $('.ui.dropdown').dropdown();
        $('.ui.accordion').accordion();

        // bind "hide and show vertical menu" event to top right icon button 
        $('.ui.toggle.button').click(function() {
            $('.ui.vertical.menu').toggle("250", "linear")
        });
    });
</script>