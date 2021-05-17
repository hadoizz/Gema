<!DOCTYPE html>
<html lang="en">
<head>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $style ?>
    <style>
        #poster{
            transition: 0.3s;
            box-shadow: 5px 10px;
            box-shadow: 0px 10px 20px 0 rgba(0, 0, 0, 1);
        }
        #poster:hover{ 
            transform: scale(1.02);
            box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 1);
        }
    </style>
</head>
<body>
    <?= $nav ?>
    <div class="ui container" id="main">
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
        <?php } ?>
        <div >
            <div class="fotorama" style="padding-left: 50px; border-radius: 10px" data-loop="true" data-autoplay="true" 
                data-width="100%" data-ratio="400/200" data-minwidth="400" 
                data-maxwidth="1000" data-minheight="300" data-maxheight="100%">
                <img src= <?= base_url('/assets/img/motogp.jpg')?>>
                <img src= <?= base_url('/assets/img/resident.jpg')?>>
                <img src= <?= base_url('/assets/img/thedivision.jpg')?>>
                <img src= <?= base_url('/assets/img/metroexodus.jpg')?>>
                <img src= <?= base_url('/assets/img/cyberpunk44.jpg')?>>
            </div>
        </div>
        <div class="ui center aligned grid">
        <?php 
            echo $showGames; 
        ?>
        </div>
    </div>
    <script>
    $('.message .close')
    .on('click', function() {
        $(this).closest('.message').transition('fade');
    });
    </script>
    <?= $footer ?>
</body>
</html>