<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $judul; ?></title>

  <!-- Bootstrap -->
  <link href="<?= base_url('asset'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('asset'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('asset'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('asset'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('asset'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>


    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="<?= base_url('auth'); ?>" method="POST">
            <h1>Login</h1>
            <?= $this->session->flashdata('message'); ?>
            <div>
              <small class="text-danger">
                <?= form_error('email'); ?></small>
              <!-- input email -->
              <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>
            <div>
              <small class="text-danger">
                <?= form_error('password'); ?></small>
              <!-- input password -->
              <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
            <div>
              <button class="btn btn-default submit" type="submit">Log in</button>

            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="<?= base_url('Auth/register'); ?>" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-desktop"></i> SPK Laptop</h1>
                <p>©<?= date('Y'); ?> All Rights Reserved.</p>
              </div>
            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
</body>

</html>