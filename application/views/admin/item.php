<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Games</title>
    <?= $style ?>
    <?php echo $groceryCRUD ?>

</head>
<body>
    <h1>Admin</h1>
    <a class="ui button" href="<?= base_url('index.php/login/logOut') ?>">Log Out</a>
    <a class="ui button" href="<?= base_url('index.php/admin/Order') ?>">ORDER</a>
    <?php echo $crud['output']; ?>
</body>
</html>