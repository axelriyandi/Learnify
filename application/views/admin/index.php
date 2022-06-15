<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row my-5">
    <div class="col-sm-3 pb-3">
      <div class="card border-left-warning shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <p class="text-xs font-weight-bold text-warning text-uppercase">
                Registered Account</p>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all('user'); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-warning pr-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 pb-3">
      <div class="card border-left-primary shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <p class="text-xs font-weight-bold text-primary text-uppercase">
                Pelajaran</p>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all('pelajaran'); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-primary pr-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 pb-3">
      <div class="card border-left-success shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <p class="text-xs font-weight-bold text-success text-uppercase">
                Kelas</p>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all('kelas'); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-school fa-2x text-success pr-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 pb-3">
      <div class="card border-left-danger shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <p class="text-xs font-weight-bold text-danger text-uppercase">
                Messages</p>
              <div class="h5 mb-0 font-weight-bold text-danger"><?= $this->db->count_all('message'); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-envelope fa-2x text-danger pr-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?= $this->session->flashdata('message'); ?>

  <!-- User -->
  <div class="row">
    <div class="col-sm-12">
      <button class="btn btn-primary">
        <i class="fas fa-user pr-2"></i>User Account
      </button>
      <div class="card card-body my-2">
        <form action="" method="post">
          <div class="row justify-content-end">
            <div class="col-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search User">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <table class="table table-sm table-hover text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Join</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($account as $acc) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $acc['name']; ?></td>
              <td><?= $acc['email']; ?></td>
              <td><?= date('d F Y', $acc['date_created']); ?></td>
              <td>
                <a href="<?= base_url('admin/deleteUser/') . $acc['id']; ?>" class="btn btn-danger btn-sm"
                  onclick="return confirm('Are you sure want to delete this account?');">
                  <i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- End of table User Account -->

      <div class="row">
        <div class="col-sm-12">
          <button class="btn btn-primary">
            <i class="fas fa-book pr-2"></i>Pelajaran
          </button>
          <div class="card card-body my-2">
            <div class="row mb-1">
              <div class="col">
                <button class="btn btn-success btn-sm rounded-circle" style="float: right;" data-target="#tambahPModal"
                  data-toggle="modal"><i class="fas fa-plus-circle"></i></button>
              </div>
            </div>
            <table class="table table-sm table-hover text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Pelajaran</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($pelajaran as $p) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $p['pelajaran']; ?></td>
                  <td>
                    <a href="<?= base_url('admin/deletePelajaran/') . $p['id']; ?>" class="btn btn-danger btn-sm"
                      onclick="return confirm('Are you sure want to delete this pelajaran?');">
                      <i class="fas fa-trash"></i></a>
                    <a href="" class="btn btn-primary btn-sm" data-target="#editPModal<?= $p['id']; ?>"
                      data-toggle="modal">
                      <i class="fas fa-edit"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- End of table Pelajaran -->

          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-primary">
                <i class="fas fa-book pr-2"></i>Kelas
              </button>
              <div class="card card-body my-2">
                <div class="row mb-1">
                  <div class="col">
                    <button class="btn btn-success btn-sm rounded-circle" style="float: right;"
                      data-target="#tambahKModal" data-toggle="modal"><i class="fas fa-plus-circle"></i></button>
                  </div>
                </div>
                <table class="table table-sm table-hover text-center">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    foreach ($kelas as $k) : ?>
                    <tr>
                      <th scope="row"><?= $i++; ?></th>
                      <td><?= $k['kelas']; ?></td>
                      <td>
                        <a href="<?= base_url('admin/deleteKelas/') . $k['id']; ?>" class="btn btn-danger btn-sm"
                          onclick="return confirm('Are you sure want to delete this class?');">
                          <i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- End of table Kelas -->



            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->