<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <?= $this->session->flashdata('message'); ?>
      <div class="title_left">
        <h3>Kriteria</h3>
      </div>
    </div>
    <div class="clearfix">
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
                    <th>Kode</th>
                    <th>Nama Kriteria</th>
                    <th>Attribut</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($kriteria as $k) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $k['kode_kriteria']; ?></td>
                      <td><?= $k['nama_kriteria']; ?></td>
                      <td><?= $k['attribut']; ?></td>
                      <td><?= $k['bobot_kriteria']; ?></td>
                      <td>
                        <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editKriteriaModal<?= $k['id_kriteria']; ?>">edit</a>
                        <a href="<?= base_url('Kriteria/deleteKriteria/') . $k['id_kriteria']; ?>" class="badge btn-round btn-danger">delete</a>
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
    </div>
  </div>
  <!-- /page content -->