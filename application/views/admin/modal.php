<!-- TambahP Modal -->
<?php $i = 0;
foreach ($pelajaran as $p) : $i++; ?>
<div class="modal fade" id="tambahPModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelajaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('admin/tambahPelajaran'); ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="pelajaran">Nama Pelajaran</label>
          <input type="text" class="form-control" id="pelajaran" name="pelajaran">
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="image" name="image">
          <label class="custom-file-label" for="image">Choose file</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- EditP Modal -->
<div class="modal fade" id="editPModal<?= $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pelajaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('admin/prosesEditPelajaran'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
        </div>
        <div class="form-group">
          <label for="pelajaran">Pelajaran</label>
          <input type="text" class="form-control" id="pelajaran" name="pelajaran" placeholder="Pelajaran"
            value="<?= $p['pelajaran']; ?>">
        </div>
        <div class="row">
          <div class="col-3">
            <img src="<?= base_url('assets/img/') . $p['foto']; ?>" class="img-thumbnail img-fluid">
          </div>
          <div class="col-auto">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- TambahK Modal -->
<div class="modal fade" id="tambahKModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('admin/tambahKelas'); ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>