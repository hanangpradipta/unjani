<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tambahkaryawan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<div class="pusatnav">
<nav class="navbar navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logounjani" src="{{ asset('css/asset/logo-unjani.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Web Kepegawaian</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link fontdd" href="#">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fontdd" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu dropdown-menu">
              <li><a class="dropdown-item fontdd" href="http://127.0.0.1:8000/admins/list">Data Karyawan</a></li>
              <li><a class="dropdown-item fontdd" href="http://127.0.0.1:8000/admins/edit">Insert Data Karyawan</a></li>
              <li><a class="dropdown-item fontdd" href="#">Absensi</a></li>
              <li><a class="dropdown-item fontdd" href="#">Keuangan</a></li>
            </ul>
            
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</div>
<div class="judultambah"><h1>Silahkan masukkan data untuk menambahkan karyawan</h1></div>
<div class="pusatcontenttambah">
  
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <form method="post" action="/admins/add">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" requeired>
    </div>
    <div class="mb-3">
      <label for="nip" class="form-label">NIP</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" requeired>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" requeired>
    </div>
    <div class="mb-3">
      <label for="golongan" class="form-label">Golongan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="golongan" requeired>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" requeired>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    <a href="/admins/edit/" class="btn btn-outline-success btn-submit datakar">Data Karyawan</a>
  </form>
</div>
</body>
</html>