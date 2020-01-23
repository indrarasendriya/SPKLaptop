<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Member</h3>
      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">


      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tabel Member</h2>
            <div class="clearfix"></div>
            <?= $this->session->flashdata('message'); ?>
          </div>
          <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Member</a>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Foto Profile</th>
                  <th>Role ID</th>
                  <th>Status</th>
                  <th>Tanggal Registrasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($member as $m) : ?>
                  <?php
                    if ($m['role_id'] == 2) {
                      $m['role_id'] = 'Member';
                    } else {
                      $m['role_id'] = 'Admin';
                    }
                    ?>

                  <?php
                    if ($m['is_active'] == 1) {
                      $m['is_active'] = 'Aktif';
                    } else {
                      $m['is_active'] = 'Tidak Aktif';
                    }
                    ?>

                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['email']; ?></td>
                    <td><img width="150" src="<?= base_url('asset/images/') . $m['image']; ?>"></td>
                    <td><?= $m['role_id']; ?></td>
                    <td><?= $m['is_active']; ?></td>
                    <td><?= (new DateTime($m['date_created']))->format('d F Y'); ?></td>
                    <td>
                      <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editUserModal<?= $m['id']; ?>">edit</a>
                      <a href="<?= base_url('member/deleteMember/') . $m['id']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus')" class="badge btn-round btn-danger">delete</a>
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