<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col menu_fixed">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>Laptop DSS</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="<?= base_url('asset/images/userlogin.png'); ?>" alt="." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2><?= $user['nama']; ?></h2>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a href="<?= base_url('Admin'); ?>"><i class="fa fa-home"></i> Home </a>
              </li>
              <li><a href="<?= base_url('Admin/kriteria'); ?>"><i class="fa fa-book"></i> Data Kriteria </a>
              <li><a><i class="fa fa-laptop"></i> Kelola Laptop <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="<?= base_url('admin/laptop'); ?>">Data Laptop</a></li>
                  <li><a href="<?= base_url('admin/nilaiLaptop'); ?>">Nilai Laptop</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('Admin/perhitungan'); ?>"><i class="fa fa-calculator"></i> Proses Perhitungan SAW</a>
              <li><a href="<?= base_url('Admin/member'); ?>"><i class="fa fa-users"></i> Data Member </a>
              <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i> Logout </a>
              </li>
              </li>
              </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
      </div>
    </div>