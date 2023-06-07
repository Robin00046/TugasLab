{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Tambah Data Pemeriksaan</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Data Pemeriksaan</li>
          <li class="breadcrumb-item active">Tambah Data Pemeriksaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Pemeriksaan</h6>
          </div>
          <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('diagnosa.store') }}" >
                      @csrf
                      <div class="col-md-12 mb-3">
                        <div class="form-floating">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control"
                          placeholder="Enter Nama" value="{{ old('nama') }}" >
                          @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <div class="form-floating">
                          <label for="id_jenis">Jenis</label>
                          <select class="form-control" name="id_jenis" id="id_jenis">
                            <option value="" selected>Pilih Jenis</option>
                            @foreach ($jenis as $item)
                            @if ($item->id == old('id_jenis'))
                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                            @else
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endif
                            @endforeach
                          </select>
                        @error('id_jenis') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-floating">
                          <label for="harga">Harga</label>
                          <input type="number" name="harga" id="harga" class="form-control"
                          placeholder="Enter harga" value="{{ old('harga') }}"
                          >
                        @error('harga') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                        <button class="btn btn-primary">Save</button>
                        <a href="{{ route('diagnosa.index') }}" class="btn btn-primary">Kembali</a>

                      </div>
                    </div>

                  </form>
                  </table>

                </div>
                        </div>
                    </div>
                <!-- /.container-fluid -->
                
@endsection
