@extends('admin.ds')

@section('profile')
<li class="nav-item dropdown pe-3">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
      <h6>{{ Auth::user()->name }}</h6>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li>
      <x-dropdown-link :href="route('profile.edit')">
        {{ __('Profile') }}
      </x-dropdown-link>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    <li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">
          {{ __('Log Out') }}
        </x-dropdown-link>
      </form>
    </li>

  </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->
@endsection

@section('pagetitle')
<div class="pagetitle">
  <h1>Form Input Jadwal Sidang</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
      <li class="breadcrumb-item active">List Jadwal Sidang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
@endsection

@section('sidebar')
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link  collapsed" href="/inputjadwal">
      <i class="bi bi-receipt"></i>
      <span>Input Jadwal</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link" href="/listjadwal">
      <i class="bi bi-card-list"></i>
      <span>List Jadwal</span>
    </a>
  </li><!-- End Register Page Nav -->


</ul>
@endsection

@section('main')



<!-- <div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div>End Page Title -->

<!-- <section class="section">
  <div class="row">
    <div class="col-lg-6"> -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Default Table</h5>

    <!-- Default Table -->
    <table class="table">
      <thead>
        <tr>
          <th class="th-sm">Nama Mahasiswa</th>
          <th class="th-sm">NRP</th>
          <th class="th-sm">Lab</th>
          <!-- <th class="th-sm">Judul TA</th> -->
          <th class="th-sm">Dosen <br />Pembimbing 1</th>
          <th class="th-sm">Dosen <br />Pembimbing 2</th>
          <th class="th-sm">Dosen <br />Penguji 1</th>
          <th class="th-sm">Dosen <br />Penguji 2</th>
          <th class="th-sm">Hari</th>
          <th class="th-sm">Tanggal Sidang</th>
          <th class="th-sm">Ruang</th>

        </tr>
      </thead>
      <tbody>

        @foreach ($data_mhs as $mhs)
        <tr>
          <td>{{$mhs->nama}}</td>
          <td>{{$mhs->nrp}}</td>
          <td>{{$mhs->lab}}</td>
          <td>{{$mhs->dospem1}}</td>
          <td>{{$mhs->dospem2}}</td>
          <td>{{$mhs->dosji1}}</td>
          <td>{{$mhs->dosji2}}</td>
          <td>{{$mhs->hari}}</td>
          <td>{{$mhs->tgl}}</td>
          <td>{{$mhs->ruang}}</td>
        </tr>
        @endforeach
      </tbody>

    </table>
    <!-- End Default Table Example -->
  </div>
</div>









</div>
</section>

</main><!-- End #main -->

@endsection