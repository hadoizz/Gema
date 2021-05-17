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
        <h1>Ini <?= $_SESSION['role']?></h1>
        <div class="ui center aligned grid">
        <?php 
            echo $showGames; 
        ?>
        </div>
    </div>
</body>
</html>