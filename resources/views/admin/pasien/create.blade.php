{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Tambah Data Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Data Pasien</li>
          <li class="breadcrumb-item active">Tambah Data Pasien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Pasien</h6>
          </div>
          <div class="card-body">
                    
                    <form class="row g-3" method="POST" action="{{ route('pasien.store') }}" >
                      @csrf
                      <div class="col-md-12 mb-3">
                        <div class="form-floating">
                          <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama" value="{{ old('nama') }}">
                        @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin"class="form-control" >
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                      </select>
                        @error('jenis_kelamin') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-floating">
                        <label for="tanggal_lahir">Tanggal lahir</label>
                      <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" 
                      placeholder="Enter tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                      @error('tanggal_lahir') 
                      <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12 mb-3 mt-3">
                      <div class="form-floating">
                        <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" id="alamat" class="form-control" 
                      placeholder="Enter alamat" value="{{ old('alamat') }}" >
                    </select>
                        @error('alamat') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-floating">
                        <label for="no_hp">No Handphone</label>
                      <input type="text" name="no_hp" id="no_hp" class="form-control" 
                      placeholder="Enter no_hp" value="{{ old('no_hp') }}" >
                    </select>
                        @error('no_hp') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                      <div class="form-floating">
                        <button class="btn btn-primary mt-3">Save</button>
                        <a href="{{ route('pasien.index') }}" class="btn btn-primary mt-3">Kembali</a>
                      </div>
                    </div>

                  </form>
                  </table>

                </div>
                        </div>
                    </div>

                
@endsection
