<!-- Modal Add Kriteria-->
<?php foreach ($nilai as $l) : ?>
  <div class="modal fade" id="modalNilaiLaptop<?= $l['id_nilai']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Add Nilai Laptop</h5>
        </div>
        <?= form_open_multipart('nilai/NilaiLaptop'); ?>


        <div class="modal-body">
          <input type="hidden" name="id_nilai" value="<?= $l['id_nilai']; ?>">
          <div class="form-group">
            <p>Prosesor</p>
            <input type="text" class="form-control" id="prosesor" name="C1" value="<?= $l['C1']; ?>">
          </div>
          <p>RAM</p>
          <div class="form-group">
            <input type="text" class="form-control" id="ram" name="C2" value="<?= $l['C2']; ?>">
          </div>
          <p>Memory</p>
          <div class="form-group">
            <input type="text" class="form-control" id="memory" name="C3" value="<?= $l['C3']; ?>">
          </div>
          <p>Graphics</p>
          <div class="form-group">
            <input type="text" class="form-control" id="graphics" name="C4" value="<?= $l['C4']; ?>">
          </div>
          <p>Layar</p>
          <div class="form-group">
            <input type="text" class="form-control" id="layar" name="C5" value="<?= $l['C5']; ?>">
          </div>
          <p>Harga</p>
          <div class="form-group">
            <input type="text" class="form-control" id="harga" name="C6" value="<?= $l['C6']; ?>">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>