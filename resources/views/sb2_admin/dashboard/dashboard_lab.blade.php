{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    

      <!-- Content Row -->
      <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('pasien.index') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Jumlah Pasien</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pasien }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
          </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <a href="{{ route('laboratory.index') }}">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Jumlah Belum Input Hasil</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $daftar }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
      </a>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href="{{ route('laboratory.hasil') }}">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Hasil</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $selesai }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
      </a>
  </div>
  <!-- End Pending Requests Card Example -->
  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('laboratory.hasil') }}">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Pendapatan Bulan {{ $pendapatan->month }} Tahun {{ $pendapatan->year }}</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($pendapatan->total,0) }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
    </a>
  </div>

  </div><!-- End Left side columns -->

</div>
     
</section>

</main><!-- End #main -->
@endsection