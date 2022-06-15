<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="row">
    <div class="col-lg-8">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

  <div class="card">
    <div class="row justify-content-center">
      <div class="col-10 pt-5 mb-3">
        <center>
          <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded-circle img-thumbnail"
            width="200px">
        </center>
      </div>
    </div>
    <hr>
    <div class="row justify-content-end">
      <div class="col-1">
        <a href="" class="btn btn-primary" data-target="#editModal" data-toggle="modal"><i class="fas fa-edit"></i>
        </a>
      </div>
    </div>
    <div class="form-group row px-4 mt-3">
      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
        <strong class="text-uppercase">Nama Lengkap</strong></label>
      <div class="col-sm-10 pb-3">
        <input type="text" class="form-control form-control-sm" id="name" name="name" value="<?= $user['name']; ?>"
          readonly>
      </div>
      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
        <strong class="text-uppercase">Alamat Email</strong></label>
      <div class="col-sm-10 pb-3">
        <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $user['email']; ?>"
          readonly>
      </div>
      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong
          class="text-uppercase">Role</strong></label>
      <div class="col-sm-10 pb-3">
        <input type="text" class="form-control form-control-sm" id="role_id" name="role_id"
          value="<?= $user['role_id']; ?>" readonly>
      </div>
      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong
          class="text-uppercase">Tanggal
          dibuat</strong></label>
      <div class="col-sm-10 pb-3">
        <input type="text" class="form-control form-control-sm" id="name" name="name"
          value="<?= date('d F Y', $user['date_created']); ?>" readonly>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/editProfile'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="name" name="name"
                value="<?= $user['name']; ?>">
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label col-form-label-sm">Alamat Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control form-control-sm" id="email" name="email"
                value="<?= $user['email']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">Foto Profile</div>
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>