@extends('sb2_admin.main')
@section('content')
  <div class="container-fluid">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- Begin Page Content -->

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
          <a href="{{ route('user.index') }}">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Semua User</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
            </div>
          </a>
      </div>
      <div class="col-xl-4 col-md-6 mb-4">
        <a href="{{ route('user.index') }}">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Jumlah Admin Laboratory</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
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
      <div class="col-xl-4 col-md-6 mb-4">
        <a href="{{ route('pasien.index') }}">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Jumlah Pasien</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pasien }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
      </div>        
        <!-- End Pending Requests Card Example -->

        </div>

     

@endsection