<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $style ?>
</head>
<body>
    <div class="ui column center aligned middle aligned grid segment">
    <div class="column">
        <div class="ui ordered steps">
            <div class="completed step">
                <div class="content">
                    <div class="title">Shipping</div>
                    <div class="description">Choose your shipping options</div>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="title">Billing</div>
                    <div class="description">Enter billing information</div>
                </div>
            </div>
            <div class="active step">
                <div class="content">
                    <div class="title">Confirm Order</div>
                    <div class="description">Verify order details</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>