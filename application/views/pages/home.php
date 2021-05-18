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
    
</head>
<body>
    <?= $nav ?>
    <div class="ui container" id="main">
        <?= $alert ?>
        <div class="ui center aligned grid">
        <div class="fourteen wide column">
            <div class="fotorama" style="border-radius: 10px" data-loop="true" data-autoplay="true" 
                data-width="100%" data-ratio="400/200" data-minwidth="200" 
                data-maxwidth="1000" data-minheight="300" data-maxheight="100%">
                <img src= <?= base_url('/assets/img/motogp.jpg')?>>
                <img src= <?= base_url('/assets/img/resident.jpg')?>>
                <img src= <?= base_url('/assets/img/thedivision.jpg')?>>
                <img src= <?= base_url('/assets/img/metroexodus.jpg')?>>
                <img src= <?= base_url('/assets/img/cyberpunk44.jpg')?>>
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui horizontal inverted divider">Our Games</div>
        </div>
        <?php echo $showGames; ?>
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