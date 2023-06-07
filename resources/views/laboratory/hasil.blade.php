{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Hasil Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Hasil Laboratory</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Hasil Laboratory</h6>
          </div>
          <div class="card-body">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nomor Pendaftaran</th>
                        <th scope="col" class="text-center">Nama Pasien</th>
                        <th scope="col" class="text-center">Tes</th>
                        <th scope="col" class="text-center">Tanggal</th>
                        <th scope="col" class="text-center">Hasil</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($lab as $item)
                        <tr>
                            <th scope="row" class="text-center"><a href="#">{{ $loop->iteration }}</a></th>
                            <td class="text-center">{{ $item->no_lab }}</td>
                            <td class="text-center">{{ $item->pasien }}</td>
                            <td class="text-center">{{ $item->diagnosa }}</td>
                            <td class="text-center">{{ $item->tanggal }}</td>
                            <td class="text-center">{{ $item->hasil }}</td>
                            

                          </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                      
                      
                    </tbody>
                  </table>

                </div>
                        </div>
                    </div>

@endsection
