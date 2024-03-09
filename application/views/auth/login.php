<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" type="text/css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="<?= base_url('auth/login_proses') ?>" method="post">
                <h1>Login</h1>
                <hr>
                
                <?= $this->session->flashdata('message'); ?>
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com " value="<?= set_value('email');?>" >
                <?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
                <label for="">password</label>
                <input type="password" name="password" id="password" placeholder="wa**** ">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <button type="submit">login</button>
                <p>
                    <a href="">forgot Password</a>
                </p>
                <p>
                    <a href="<?= base_url('register') ?>">Create Account</a>
                </p>

            </form>
        </div>
        <div class="right">
            <img src="<?= base_url('assets/img/opening1.gif') ?>" alt="" srcset="">
        </div>
    </div>
</body>

</html>