<!-- Modal Add Kriteria-->
<?php foreach ($laptop as $l) : ?>
  <div class="modal fade" id="editLaptopModal<?= $l['id_laptop']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Data Laptop</h5>
        </div>
        <?= form_open_multipart('laptop/editLaptop'); ?>
        <input type="hidden" name="id_laptop" value="<?= $l['id_laptop']; ?>">

        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="merk" name="merk" value="<?= $l['merk']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $l['tipe']; ?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="prosesor" name="prosesor" value="<?= $l['prosesor']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="ram" name="ram" value="<?= $l['ram']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="memory" name="memory" value="<?= $l['memory']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="graphics" name="graphics" value="<?= $l['graphics']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="layar" name="layar" value="<?= $l['layar']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $l['harga']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="kebutuhan">
              <option value="<?= $l['id_laptop']; ?>"> Kebutuhan Laptop
              <option value="1">Design</option>
              <option value="2">Office</option>
              <option value="3">Gaming</option>
            </select>
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