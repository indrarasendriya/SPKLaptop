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
          <form action="<?= base_url('Auth/register'); ?>" method="post">
            <h1>Create Account</h1>
            <div>
              <small class="text-danger">
                <?= form_error('username'); ?></small>
              <input type="text" class="form-control" placeholder="Username" name="username" />
            </div>
            <div>
              <small class="text-danger">
                <?= form_error('email'); ?></small>
              <input type="email" class="form-control" placeholder="Email" name="email" />
            </div>
            <div>
              <small class="text-danger">
                <?= form_error('password1'); ?></small>
              <input type="password" class="form-control" placeholder="Password" name="password1" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2" />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Create Account</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Apakah sudah registrasi?
                <a href="<?= base_url('Auth'); ?>" class="to_register"> Log in </a>
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