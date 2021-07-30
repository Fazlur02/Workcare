<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= base_url('assets/home/img/w.png');?>" rel="icon">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/home/style.css');?>">
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" action="<?= base_url('register'); ?>">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                                <?= form_error('name', ' <small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                                <?= form_error('email', ' <small class="text-danger">', '</small>') ?>
                            </div>
                           <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass1" id="pass1" placeholder="Password"/>
                                <?= form_error('pass1', ' <small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="pass2" id="pass2" placeholder="Repeat your password"/>
                                <?= form_error('pass2', ' <small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                            <select name="role" class="custom-select form-control" id="inputGroupSelect01">
                                <option selected>Choose your role...</option>
                                 <option value="1">Perusahaan</option>
                                 <option value="2">User</option>
                                 </select>
                            </div>
                            <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary rounded-3">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url('assets/home/images/signup-image.jpg');?>" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>