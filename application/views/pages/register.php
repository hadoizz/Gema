<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $style ?>
    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier: 'email',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your e-mail'
                                    },
                                    {
                                        type: 'email',
                                        prompt: 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier: 'password',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your password'
                                    },
                                    {
                                        type: 'length[8]',
                                        prompt: 'Your password must be at least {ruleValue} characters'
                                    }
                                ]
                            },
                            nama: {
                                identifier: 'nama',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your name'
                                    }
                                ]
                            },
                            alamat: {
                                identifier: 'alamat',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your address'
                                    }
                                ]
                            },
                            notelp: {
                                identifier: 'notelp',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your telephone number'
                                    },
                                    {
                                        type: 'number',
                                        prompt: 'Your telephone number must be a numeric'
                                    }
                                ]
                            }
                        }
                    });
            });
    </script>
</head>

<body>
    <?= $nav ?>

    <br><br>
    <div class="ui container" style="margin-top: 6rem">
        <div class="ui middle aligned center aligned grid">
            <div class="column" style="max-width: 450px">
                <h2 class="ui teal image header">
                    <!-- <img src="assets/images/logo.png" class="image"> -->
                    <div class="content">
                        Register to your account
                    </div>
                </h2>
                <form class="ui large form" method="POST" action="<?= base_url('index.php/Register/auth') ?>">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" placeholder="E-mail address">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="nama" placeholder="Name">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="address card icon"></i>
                                <input type="text" name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="phone icon"></i>
                                <input type="text" name="notelp" placeholder="No Telepon">
                            </div>
                        </div>

                        <button class="ui fluid large teal button" type="submit">
                            Register
                        </button>
                    </div>

                    <div class="ui error message"></div>
                </form>

                <div class="ui message">
                    Already have an account? <a href="<?= base_url('index.php/Login') ?>">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>