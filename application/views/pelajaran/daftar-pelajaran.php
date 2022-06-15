<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <?php foreach ($pelajaran as $p) : ?>
    <div class="col-3">
      <div class="card">
        <img src=" <?= base_url('assets/img/') . $p['foto'] ; ?>" class="card-img-top img-fluid" style="height: 150px;">
        <div class="card-body">
          <h5 class="card-title"><?= $p['pelajaran']; ?></h5>
        </div>
        <ul class="list-group list-group-flush">
          <?php foreach ($kelas as $k) : ?>
          <li class=" list-group-item">
            <a href="<?= base_url('user/detailPelajaran/') . $p['id'] . '/' . $k['id']; ?>"><?= $k['kelas']; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->