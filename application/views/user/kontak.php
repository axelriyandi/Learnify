<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-5">
      <?= $this->session->flashdata('message');?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5">
      <div class="card">
        <div class="card-header bg-primary text-light">
          <h2 class="text-center pt-1 pb-0">Contact Us</h2>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <i class="fab fa-whatsapp pr-2"></i><a href="https://wa.me/0895330197986">+62 813 8468 3590</a>
          </li>
          <li class="list-group-item">
            <i class="fas fa-at pr-2"></i><a href="mailto:Rhandayani1211@gmail.com">4s.pein@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-6">
      <?php echo form_open_multipart('user/pesan');?>

      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="name" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
      </div>
      <div class="form-group">
        <label for="message">Leave me a message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="file" name="file">
        <label class="custom-file-label" for="file">Choose file</label>
      </div>
      <button class="btn btn-primary btn-block mt-2" type="submit">Send</button>

      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->