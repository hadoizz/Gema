<?php foreach($games as $item){ ?>
<div class="eight wide mobile four wide tablet three wide computer stackable column left aligned"  style="margin-bottom: 10px;">
    <div class="row">
        <div class="ui fluid rounded image">
            <img id="poster" src="https://semantic-ui.com/images/avatar2/large/kristy.png">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="ui fluid teal card" style="background-color: #0C0020; box-shadow: none;">
            <div class="content">
                <a class="header" style="color: white; height: 80px; font-weight: normal;"><?= $item['Nama_Barang'] ?></a>
                <div class="ui divider"></div>
                <div class="description">
                    <h3 style="color: white;">IDR<?= number_format($item['Harga']) ?>,-</h3>    
                </div>
            </div>
            <div class="extra content">
                <div class="right floated author">
                    <a href="#" class="ui teal icon button"><i class="large cart plus icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>