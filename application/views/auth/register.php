<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css') ?>" type="text/css">
</head>

<body>
    <div class="container">
        <div class="registration">
            <form action="<?= base_url('register') ?>" method="post">
                <h1>Registration</h1>
                <hr>
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Aldi Saputra" value="<?= set_value('name') ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" value="<?= set_value('password') ?>">

                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" value="<?= set_value('confirm_password') ?>">

                <button type="submit">Register</button>
                <p>
                    Already have an account? <a href="<?= base_url('login') ?>">Login here</a>
                </p>

            </form>
        </div>

    </div>
</body>

</html>