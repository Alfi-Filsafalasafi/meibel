<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../assets_admin/headers.css" rel="stylesheet">
  </head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">MeiBel</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link active" aria-current="page">Dashboard</a></li>
        <li class="nav-item"><a href="{{route('materi')}}" class="nav-link">Materi</a></li>
        <li class="nav-item"><a href="{{route('latsol')}}" class="nav-link">Soal dan Pembahasan</a></li>
        <li class="nav-item"><a href="{{route('katsol')}}" class="nav-link">Kategori Soal</a></li>
        <li class="nav-item"><a href="{{route('pembahas')}}" class="nav-link">Pembahasan Soal</a></li>
        <li class="nav-item"><a href="{{route('universitas')}}" class="nav-link">Daftar Universitas</a></li>
        <li class="nav-item"><a href="{{route('akun')}}" class="nav-link">Daftar Akun</a></li>

      </ul>
    </header>
  </div>
  @yield('content')
</body>
</html>