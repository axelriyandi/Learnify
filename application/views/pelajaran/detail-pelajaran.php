<!-- Begin Page Content -->
<div class="container-fluid">

  <?php $id = 1;
  foreach ($materi as $m) : ?>

  <h1 class="text-center mt-5"><?= $m['judul']; ?></h1>

  <div class="row justify-content-center">

    <div class="col-6">

      <iframe width="560" height="315" src="<?= base_url('assets/video/') . $m['url']; ?>" frameborder="0"
        allowfullscreen></iframe>

    </div>

  </div>

  <?php endforeach; ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->