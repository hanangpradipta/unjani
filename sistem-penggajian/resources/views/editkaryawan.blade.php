<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/editkaryawan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <li><a class="dropdown-item fontdd" href="http://127.0.0.1:8000/admins/edit">Input Data Karyawan</a></li>
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
<!-- <a class="btn btn-primary" href="/admins/input" role="button">Tambah Karyawan <i class="fa-solid fa-plus"></a> -->
<a href="/admins/input" class="tomboltambah"><button type="button" class="btn btn-primary">Tambah Karyawan <i class="fa-solid fa-plus"></i></button></a>
<div class="pusattable">
    <table class="table table-success table-striped tabeldashboard">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Golongan</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($admins as $admin)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $admin->nip }}</td>
                <td>{{ $admin->nama }}</td>
                <td>{{ $admin->alamat }}</td>
                <td>{{ $admin->golongan}}</td>
                <td>{{ $admin->updated_at }}</td>
                <td>
                <a class="btn btn-success" href="/admins/show/{{$admin->id}}" role="button">Edit</a>
                <form action="/admins/delete/{{ $admin->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?')">Hapus</button>
                </form>
                <!-- <a class="btn btn-danger" href="/admins/delete/{$id}" role="button">Hapus</a> -->

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
