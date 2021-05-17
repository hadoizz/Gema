<!DOCTYPE html>
<html lang="en">
<head>
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
        <h1>Ini Home</h1>
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