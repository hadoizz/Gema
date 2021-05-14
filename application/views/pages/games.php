<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <?= $style ?>
    <style>
        #poster{ transition: 0.3s; box-shadow: 5px 10px;}
        #poster:hover{ transform: scale(1.02); }
    </style>
</head>
<body style="background-color: #1F143D;">
<br><br>
    <div class="ui container">
        <div class="ui grid">
        <?php 
            for($i=0; $i<20; $i++){ 
                echo $card; 
            }
        ?>
        </div>
    </div>
</body>
</html>