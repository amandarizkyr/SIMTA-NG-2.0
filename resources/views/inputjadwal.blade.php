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
      <li class="breadcrumb-item active">Form Input Jadwal Sidang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
@endsection

@section('sidebar')
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed " href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link " href="/inputjadwal">
      <i class="bi bi-receipt"></i>
      <span>Input Jadwal</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/listjadwal">
      <i class="bi bi-card-list"></i>
      <span>List Jadwal</span>
    </a>
  </li><!-- End Register Page Nav -->
</ul>
@endsection

@section('main')
<div class="col-lg-15">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Penjadwalan Sidang Mahasiswa</h5>

      <!-- General Form Elements -->
      <form method="POST" action="{{route('simpanjadwal')}}">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">NRP</label>
          <div class="col-sm-10">
            <input type="number" name="nrp" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Lab</label>
          <div class="col-sm-10">
            <input type="text" name="lab" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Dosen Pembimbing 1</label>
          <div class="col-sm-10">
            <input type="text" name="dospem1" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Dosen Pembimbing 2</label>
          <div class="col-sm-10">
            <input type="text" name="dospem2" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Dosen Penguji 1</label>
          <div class="col-sm-10">
            <input type="text" name="dosji1" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Dosen Penguji 2</label>
          <div class="col-sm-10">
            <input type="text" name="dosji2" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Hari</label>
          <div class="col-sm-10">
            <input type="text" name="hari" class="form-control">
          </div>
        </div>


        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Sidang</label>
          <div class="col-sm-10">
            <input type="date" name="tgl" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Ruang</label>
          <div class="col-sm-10">
            <input type="text" name="ruang" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim Jadwal</button>
          </div>
        </div>


      </form><!-- End General Form Elements -->

    </div>
  </div>

</div>




</form><!-- End General Form Elements -->

</div>
</div>

</div>
@endsection