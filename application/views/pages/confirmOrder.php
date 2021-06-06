<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
    <?= $style ?>
</head>

<body>
    <div class="ui tiny modal">
        <div class="header">
            <h2>Alert!</h2>
        </div>
        <div class="content">
            <h4 style="font-weight: normal;">Are you sure want to confirm this order?</h4>
        </div>
        <div class="actions">
        <form method="POST" action="<?= base_url('index.php/Customer/submitOrder') ?>">
                <input type="number" name="day" style="display: none;" id="inputDay">
                <div class="actions">
                    <div class="ui negative button" id="closeModal">No</div>
                    <button class="ui positive button" type="submit">Yes</button>
                </div>
            </form>
        </div>
    </div>

    <div class="ui container centered" id="main">
        <div style="text-align: center;">
        <div class="ui horizontal inverted divider"><h1>Order Confirmation</h1></div>
        </div>
        <?php if (count($items) == 0) {
            echo "Your cart is empty";
            $total = 0;
        } else {
            $total = 0;
            foreach ($items as $item) { ?>
                <?php $total += $item['Harga']; ?>
                <div class="ui grid">
                    <div class="two wide column">
                        <div class="ui fluid rounded image">
                            <img id="poster" src="<?= base_url('assets/uploads/poster/' . $item['Gambar']) ?>">
                        </div>
                    </div>
                    <div class="fourteen wide column middle aligned">
                        <h2 style="font-weight: normal;"><?= $item['Nama_Barang'] ?></h1>
                        <h3 style="font-weight: normal;">IDR <?= number_format($item['Harga']) ?></h2>
                    </div>
                </div>
                <div class="ui divider"></div>
            <?php } ?>
        <?php } ?>
        <div class="ui center aligned gird" style="text-align: center;">
            <div class="sixteen wide column">
                <h1>Total</h1><br>
            </div>
            <div class="sixteen wide column">
                <div class="ui labeled right labeled input">
                    <div class="ui orange label">
                        IDR <span id=""><?= number_format($total) ?></span> ×
                    </div>
                    <input type="number" value="" id="hari" oninput="calculateTotal(<?= $total ?>)" placeholder="..day" >
                    <div class="ui blue label" id="equal">= IDR 0</div>
                </div>
            </div><br>
            <div class="sixteen wide column">
                <div class="ui two column row">
                    <a href="<?= $_SERVER['HTTP_REFERER']?>" class="ui button">Cancel</a>
                    <a id="checkoutBtn" class="ui green button disabled">Confirm Order</a>
                
                </div>
            </div><br><br>
        </div>
    </div>

    <script>
        function calculateTotal(total) {
            var hari = document.getElementById('hari').value;

            var checkout = document.getElementById('checkoutBtn');
            if (hari > 0) {
                if(hari % 1 == 0){
                    if(hari>=30){
                        document.getElementById('equal').innerHTML = "Maximum 30 days " ;
                        checkout.classList.add('disabled')
                    }else{
                        var hasil = (total * hari).toLocaleString();
                        document.getElementById('equal').innerHTML = "= IDR " + hasil;
                        checkout.classList.remove('disabled')
                        document.getElementById('inputDay').value = hari
                    }
                }else{
                    document.getElementById('equal').innerHTML = "Float number not allowed";
                    checkout.classList.add('disabled')
                }
            } else if (hari < 0) {
                document.getElementById('equal').innerHTML = "= IDR 0";
                checkout.classList.add('disabled')
                document.getElementById('hari').value = 0
            } else if (hari == 0) {
                document.getElementById('equal').innerHTML = "= IDR 0";
                checkout.classList.add('disabled')
            }
        }

        $('#checkoutBtn').on('click', function() {
            $('.ui.modal').modal('show');
        });

        $('#closeModal').on('click', function() {
            $('.ui.modal').modal('hide');
        });
    </script>
</body>

</html>