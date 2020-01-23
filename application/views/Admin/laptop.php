<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <?= $this->session->flashdata('message'); ?>
        <h3>Data Laptop</h3>
      </div>
      <a href="" class="btn btn-round btn-primary mb-3 pull-right" data-toggle="modal" data-target="#newMenuModal">Tambah Data Laptop</a>
    </div>
  </div>
  <div class="clearfix"> </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><?= $nama_tbl; ?></h2>
          <div class="clearfix">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
          </div>
        </div>
        <div class="x_content">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Prosesor</th>
                <th>RAM</th>
                <th>Memory</th>
                <th>Graphics</th>
                <th>Layar</th>
                <th>Harga</th>
                <th>Kebutuhan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($laptop as $l) : ?>
                <?php
                if ($l['kebutuhan'] == 1) {
                  $l['kebutuhan'] = 'Design';
                } elseif ($l['kebutuhan'] == 2) {
                  $l['kebutuhan'] = 'Office';
                } else {
                  $l['kebutuhan'] = 'Gaming';
                }
                ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $l['merk']; ?></td>
                  <td><?= $l['tipe']; ?></td>
                  <td><?= $l['prosesor']; ?></td>
                  <td><?= $l['ram']; ?></td>
                  <td><?= $l['memory']; ?></td>
                  <td><?= $l['graphics']; ?></td>
                  <td><?= $l['layar']; ?></td>
                  <td><?= $l['harga']; ?></td>
                  <td><?= $l['kebutuhan']; ?></td>
                  <td>
                    <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editLaptopModal<?= $l['id_laptop']; ?>">edit</a>
                    <a href="<?= base_url('Laptop/deleteLaptop/') . $l['id_laptop']; ?>" class="badge btn-round btn-danger">delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->