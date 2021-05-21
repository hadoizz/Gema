<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo $style ?>
</head>

<body>
    <?php echo $nav ?>

    <div class="ui grid container" id="main">
        <div class="sixteen wide column">
            <div class="ui horizontal inverted divider">Our GEMA Team</div>
        </div>
        <div class="ui four stackable cards" style="margin-bottom: 50px">
            <div class="card">
                <div class="image">
                    <img src="<?= base_url('assets/img/coba.jpg') ?>">
                </div>
                <div class="content">
                    <a class="header">Najim Rizky</a>
                    <div class="meta">
                        <span class="date">Joined in 2021</span>
                    </div>
                    <div class="description">
                        Programmer 1
                    </div>
                    <div class="description">
                        00000040113
                    </div>
                </div>
                <div class="extra content">
                    <a target="_blank" href="https://github.com/najimRizky">
                        <i class="git icon"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/nazky_r/">
                        <i class="instagram icon"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/najim-rizky/">
                        <i class="linkedin icon"></i>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="<?= base_url('assets/img/bona.jpg') ?>">
                </div>
                <div class="content">
                    <a class="header">Bonaventura Sanjaya</a>
                    <div class="meta">
                        <span class="date">Joined in 2021</span>
                    </div>
                    <div class="description">
                        Programmer 2
                    </div>
                    <div class="description">
                        00000038083
                    </div>
                </div>
                <div class="extra content">
                    <a target="_blank" href="https://github.com/ayaayawae">
                        <i class="git icon"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/bonbonzay/">
                        <i class="instagram icon"></i>
                    </a>
                </div>
            </div>

            <div class="inverted card">
                <div class="image">
                    <img src="<?= base_url('assets/img/filbert.jpg') ?>">
                </div>
                <div class="content">
                    <a class="header">Filbert Khouwira</a>
                    <div class="meta">
                        <span class="date">Joined in 2021</span>
                    </div>
                    <div class="description">
                        Programmer 3
                    </div>
                    <div class="description">
                        00000039724
                    </div>
                </div>
                <div class="extra content">
                    <a target="_blank" href="https://github.com/filbert29">
                        <i class="git icon"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/filbertkhouwira/">
                        <i class="instagram icon"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/filbert.khouwira.5">
                        <i class="facebook icon"></i>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="<?= base_url('assets/img/farhan.png') ?>">
                </div>
                <div class="content">
                    <a class="header">Mohamad Farhan</a>
                    <div class="meta">
                        <span class="date">Joined in 2021</span>
                    </div>
                    <div class="description">
                        Programmer 4
                    </div>
                    <div class="description">
                        00000037928
                    </div>
                </div>
                <div class="extra content">
                    <a target="_blank" href="https://github.com/kejauhan">
                        <i class="git icon"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/farhannmf__/">
                        <i class="instagram icon"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/mohamad-farhan-7469bb1b3/">
                        <i class="linkedin icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $footer ?>
</body>

</html>