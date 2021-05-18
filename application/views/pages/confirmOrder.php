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
    <div class="ui mini modal">
        <div class="header">
            Warning
        </div>
        <div class="content">
            <div class="description">
                <p>Confirm this order?</p>
            </div>
            <form method="POST" action="<?= base_url('index.php/Customer/submitOrder') ?>">
                <input type="number" name="day" style="display: none;" id="inputDay">
                <div class="actions">
                    <div class="ui button" id="closeModal">No</div>
                    <button class="ui button" type="submit">Yes</button>
                </div>
            </form>
        </div>

    </div>
    <div class="ui container" id="main">
        <?php if (count($items) == 0) {
            echo "Your cart is empty";
            $total = 0;
        } else {
            $total = 0;
            foreach ($items as $item) { ?>
                <?php $total += $item['Harga']; ?>
                <div class="ui grid">
                    <div class="four wide mobile four wide computer column">
                        <div class="ui fluid rounded image">
                            <img id="poster" src="<?= base_url('assets/uploads/poster/' . $item['Gambar']) ?>">
                        </div>
                    </div>
                    <div class="eight wide mobile eight wide tablet ten wide computer column">
                        <h1><?= $item['Nama_Barang'] ?></h1>
                        <h3>IDR <?= number_format($item['Harga']) ?></h3>
                    </div>
                </div>
                <div class="ui divider"></div>
            <?php } ?>
        <?php } ?>
        <div class="ui labeled input">
            <div class="ui label">
                IDR <span id=""><?= number_format($total) ?></span> ×
            </div>
            <input type="number" value="" id="hari" oninput="calculateTotal(<?= $total ?>)" placeholder="day" min=0>
            <div class="ui label" id="equal">= IDR 0</div>
        </div>
        <div class="eight wide column right aligned">
            <a id="checkoutBtn" class="ui green button disabled">Confirm Order</a>
        </div>
    </div>

    <script>
        function calculateTotal(total) {
            var hari = document.getElementById('hari').value;

            var checkout = document.getElementById('checkoutBtn');
            if (hari > 0) {
                var hasil = (total * hari).toLocaleString();
                document.getElementById('equal').innerHTML = "= IDR " + hasil;
                checkout.classList.remove('disabled')
                document.getElementById('inputDay').value = hari
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