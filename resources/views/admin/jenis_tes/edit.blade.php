{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Edit Data Jenis Pemeriksaan</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Jenis Pemeriksaan</li>
          <li class="breadcrumb-item active">Edit Data Jenis Pemeriksaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Jenis Pemeriksaan</h6>
          </div>
          <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('jenis.update',$jenis->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12">
                        <div class="form-floating">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama',$jenis->nama) }}">
                            @error('nama') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                        <div class="form-floating">
                          <button class="btn btn-primary">Save</button>
                          <a href="{{ route('jenis.index') }}" class="btn btn-primary">Kembali</a>
                          </div>
                        </div>
  
                    </form>
                  </table>

                </div>
                        </div>
                    </div>

                
@endsection
