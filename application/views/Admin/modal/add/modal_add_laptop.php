<!-- Modal Add Kriteria-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Add Laptop</h5>
      </div>
      <?= form_open_multipart('laptop/addLaptop'); ?>


      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Laptop">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe Laptop">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="prosesor" name="prosesor" placeholder="Prosesor">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="ram" name="ram" placeholder="Ram">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="memory" name="memory" placeholder="Memory">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="graphics" name="graphics" placeholder="Graphics">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="layar" name="layar" placeholder="Layar">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
        </div>
        <div class="form-group">
          <select class="form-control" name="kebutuhan">
            <option>Kebutuhan Laptop</option>
            <option value="1">Design</option>
            <option value="2">Office</option>
            <option value="3">Gaming</option>
          </select>
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