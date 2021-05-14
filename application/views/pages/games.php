<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <?= $style ?>
    <style>
        #poster{
            transition: 0.3s;
            box-shadow: 5px 10px;
        }
        #poster:hover{ 
            transform: scale(1.02);
            box-shadow: 5px 10px;
        }
    </style>
</head>
<body style="background-color: #1F143D;">
<div class="ui inverted  menu" style="background-color: transparent; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:20px" >
<div class="ui small image" style="width: 150px;">
  <img  src="<?= base_url('/assets/img/logo1.png') ?>">
</div>
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
    </div>
    <a class="ui item">
      Logout
    </a>
  </div>
</div>
<br><br>
    <div class="ui container">
        <div class="ui center aligned grid">
        <?php 
            echo $card; 
        ?>
        </div>
    </div>
</body>
</html>