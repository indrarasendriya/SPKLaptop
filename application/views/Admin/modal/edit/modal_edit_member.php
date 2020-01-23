<!-- Modal Edit User  -->
<?php foreach ($member as $m) : ?>
  <div class="modal fade" id="editUserModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Ubah Member</h5>
        </div>
        <?= form_open_multipart('member/editMember'); ?>
        <input type="hidden" name="id" value="<?= $m['id']; ?>">

        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama']; ?>" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="<?= $m['email']; ?> " placeholder="Email">
          </div>
          <div class="input-group">
            <img src="<?= base_url('asset/images/') . $m['image']; ?>" style="width:100px; margin-bottom:10px;">
            <input type="file" class="form-control" id="image" name="image" value="<?= $m['image']; ?>">
            <span class="input-group-btn">
              <p class="btn btn-info">Foto Profil</p>
            </span>
          </div>
          <div class="form-group">
            <select class="form-control" name="role_id">
              <option value="<?= $m['role_id']; ?>"> Role
                <?php
                  if ($m['role_id'] == 1) {
                    $m['role_id'] = 'Admin';
                  } else {
                    $m['role_id'] = 'Member';
                  }
                  ?>
                <?= $m['role_id']; ?></option>
              <option>Pilih Role</option>
              <option value="1">Admin</option>
              <option value="2">Member</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="is_active">
              <option value="<?= $m['id']; ?>"> Status
                <?php
                  if ($m['is_active'] == 1) {
                    $m['is_active'] = 'Aktif';
                  } else {
                    $m['is_active'] = 'Tidak Aktif';
                  }
                  ?>
                <?= $m['is_active']; ?> </option>
              <option>Status Pengguna</option>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="date_created" name="date_created" <?= $m['date_created']; ?>placeholder="Tanggal">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Edit</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<?php endforeach; ?>