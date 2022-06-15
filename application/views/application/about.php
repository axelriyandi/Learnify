<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Road+Rage&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style.css">

  <title>Aspein | About Application</title>

  <style>
  body {
    background-color: #000;
    font-family: 'Orbitron', sans-serif;
  }

  .navbar-brand {
    color: #ff004c !important;
    font-size: 24px;
    text-transform: uppercase;
  }

  .navbar-brand:hover {
    color: #fff !important;
    border-bottom: 2px #ff004c solid;
  }

  .nav-item .nav-link {
    color: #ff004c !important;
    font-size: 16px;
  }

  .nav-item .nav-link:hover {
    color: #fff !important;
    border-bottom: 2px #ff004c solid;
    margin-top: -2px;
  }

  .top-about {
    margin-top: 100px;
    margin-bottom: 100px;
    padding-bottom: 50px;
    color: #ff004c;
    border-bottom: #ff004c 1px solid;
  }

  .top-about .col-sm-8 h1 {
    font-size: 40px;
  }

  .top-about .col-sm-8 h1 span {
    text-transform: uppercase;
    color: #fff;
  }

  .top-about .col-sm-8 p {
    border-bottom: 5px #fff solid;
    padding-bottom: 10px;
  }

  .top-about .col-sm-8 a {
    color: #ff004c;
    border: 1px #ff004c solid;
    background-color: #000;
  }

  .top-about .col-sm-8 a:hover {
    border: 1px #ff004c solid;
    background-color: #ff004c;
    color: #fff;
  }

  .features-about {
    margin-top: 50px;
    margin-bottom: 100px;
    border-bottom: 1px #ff004c solid;
  }

  .features-about h1 {
    padding-bottom: 50px;
    text-align: center;
    color: #ff004c;
  }

  .features-about .col-sm-4 .card {
    margin: 10px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    box-shadow: 6px 4px 0 #ff5789,
      10px 8px 0 #ff004c,
      inset 6px 4px 0 #ff004c;
    padding-bottom: 30px;
    margin-bottom: 50px;
  }

  .features-about .col-sm-4 .card h6 {
    color: #ff004c;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
  }

  .vm-about {
    padding-top: 50px;
    margin-bottom: 100px;
  }

  .vm-about .col-sm-6 h1 {
    color: #ff004c;
    font-size: 40px;
    font-weight: bold;
    text-shadow: 2px 2px 0 #ff5789;
  }

  .vm-about .col-sm-6 p {
    color: #fff;
    text-align: justify;
  }

  .vm-about .col-sm-6 ul {
    list-style: decimal;
    color: #ff004c;
  }

  .vm-about .col-sm-6 ul p {
    text-align: justify;
  }

  .teams-about {
    margin-top: 100px;
    margin-bottom: 100px;
  }

  .teams-about h1 {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    color: #ff004c;
    border-top: 1px #ff004c solid;
  }

  .teams-about .col-sm-2 p {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 25px;
    color: #fff;
    text-shadow: 0 2px 0 #ff5789,
      0 4px 0 #ff004c;
  }
  </style>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Aspein</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#top-about">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-about">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#vm-about">Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#teams-about">Teams</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- -X-navbar -->

  <div class="container">

    <!-- Content-TopAbout -->
    <div class="top-about">
      <div id="top-about">
        <div class="row">
          <div class="col-sm-8">
            <h1>Hello, Welcome to <span>Aspein</span></h1>
            <p>Jelajahi berbagai macam berita pendidikan terupdate dan tuangkan aspirasi anda di dalamnya.</p>
            <a href="<?= base_url('user'); ?>" class="btn">Open Application</a>
          </div>
          <div class="col-sm-4">
            <img src="<?= base_url('assets/img/img-jumbotron.jpg'); ?>" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- X-topcontent -->

    <!-- Content-Features -->
    <div class="features-about">
      <h1>Features</h1>
      <div id="features-about">
        <div class="row justify-content-center">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url('assets/img/img-home.png'); ?>">
              <div class="card-body">
                <h6 class="card-text">Home</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url('assets/img/img-news.png'); ?>">
              <div class="card-body">
                <h6 class="card-text">News</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?= base_url('assets/img/img-contact.png'); ?>">
              <div class="card-body">
                <h6 class="card-text">Contact</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- X-features -->

    <!-- Content-VM-about -->
    <div class="vm-about">
      <div id="vm-about">
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <h1>Visi</h1>
            <p>Terwujudnya masyarakat sipil yang kuat dan mampu memperjuangkan hak-haknya atas pendidikan dan kebijakan
              publik yang mendukung akses pendidikan 12 tahun yang berkualitas dan berkeadilan.</p>
          </div>
          <div class="col-sm-4">
            <img src="<?= base_url('assets/img/img-visi.png'); ?>" class="img-fluid">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4">
            <img src="<?= base_url('assets/img/img-misi.png'); ?>" class="img-fluid">
          </div>
          <div class="col-sm-6">
            <h1>Misi</h1>
            <ul>
              <li>
                <p>Melakukan advokasi kebijakan pemerintah dalam mendukung pencapaian pendidikan yang inklusif dan
                  berkeadilan.</p>
              </li>
              <li>
                <p>Meningkatkan peran masyarakat sipil dalam proses pengambilan keputusan dan pengawasan penyelenggaraan
                  pendidikan 12 tahun yang berkualitas.</p>
              </li>
              <li>
                <p>Mengembangkan kajian dan penelitian untuk memperkuat advokasi kebijakan pendidikan berbasis data.</p>
              </li>
              <li>
                <p>Membangun sinergi jaringan pendidikan, baik di tingkat lokal, nasional, dan internasional.</p>
              </li>
              <li>
                <p>Memberdayakan kelompok-kelompok marginal untuk mendapatkan hak pendidikan yang berkualitas dan
                  meningkatkan kapasitas tenaga pendidik.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- X-vm -->

    <!-- Content-Teams -->
    <div class="teams-about">
      <h1>Aspein Teams</h1>
      <div id="teams-about">
        <div class="row justify-content-center">
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/jihad.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Muhammad Jihad Alfaridzi</p>
          </div>
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/bunga.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Verti Bunga Inal Syara</p>
          </div>
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/fahmi.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Wildan Fahmi Mubarok</p>
          </div>
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/anggai.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Blasius Febrianus</p>
          </div>
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/farel.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Farel Arya Maulana</p>
          </div>
          <div class="col-sm-2">
            <img src="<?= base_url('assets/img/teams/febby.jpeg'); ?>" class="img-fluid rounded-circle">
            <p>Febby Ariyanti Herdina</p>
          </div>
        </div>
      </div>
    </div>
    <!-- X-teams -->

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

</body>

</html>