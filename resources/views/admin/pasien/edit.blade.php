{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Edit Data Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Pasien</li>
          <li class="breadcrumb-item active">Edit Data Pasien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Pasien</h6>
          </div>
          <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('pasien.update',$pasien->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ $pasien->nama }}"
                            >
                            @error('nama') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-floating">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"class="form-control">
                              {{-- <option value="{{ $pasien->jenis_kelamin }}">{{ $pasien->jenis_kelamin }}</option> --}}
                              <option {{ ($pasien->jenis_kelamin == 'L' ? 'selected="selected"' : '') }} value="L">L</option>
                              <option {{ ($pasien->jenis_kelamin == 'P' ? 'selected="selected"' : '') }} value="P">P</option>
                            </select>
                          @error('jenis_kelamin') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                        <div class="col-md-2">
                          <div class="form-floating">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" 
                            placeholder="Enter tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" >
                            @error('tanggal_lahir') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                          <div class="form-floating">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" 
                            placeholder="Enter alamat" value="{{ $pasien->alamat }}" >
                          </select>
                            @error('alamat') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" 
                            placeholder="Enter no_hp" value="{{ $pasien->no_hp }}" >
                            @error('no_hp') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <button class="btn btn-primary">Save</button>
                            <a href="{{ route('pasien.index') }}" class="btn btn-primary">Kembali</a>

                          </div>
                        </div>
  
                    </form>
                  </table>

                </div>
                        </div>
                    </div>

                
@endsection
