<!-- Modal Add Kriteria-->
<?php foreach ($kriteria as $k) : ?>
  <div class="modal fade" id="editKriteriaModal<?= $k['id_kriteria']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Kriteria</h5>
        </div>
        <?= form_open_multipart('kriteria/editKriteria'); ?>
        <input type="hidden" name="id_kriteria" value="<?= $k['id_kriteria']; ?>">

        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama_kriteria" name="nama" value="<?= $k['nama_kriteria']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="atribut" name="attribut" value="<?= $k['attribut']; ?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="bobot" name="bobot" value="<?= $k['bobot_kriteria']; ?>">
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