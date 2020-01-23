<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <?= $this->session->flashdata('message'); ?>
        <h3>Nilai Laptop</h3>
      </div>
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
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($nilai as $l) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $l['merk']; ?></td>
                  <td><?= $l['tipe']; ?></td>
                  <td><?= $l['C1']; ?></td>
                  <td><?= $l['C2']; ?></td>
                  <td><?= $l['C3']; ?></td>
                  <td><?= $l['C4']; ?></td>
                  <td><?= $l['C5']; ?></td>
                  <td><?= $l['C6']; ?></td>
                  <td>
                    <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#modalNilaiLaptop<?= $l['id_nilai']; ?>">Nilai</a>
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