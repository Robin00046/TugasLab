{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Daftar Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Daftar Pasien</li>
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
              <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  @hasrole('Admin')
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Pasien</a>
                    @endhasrole
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Jenis Kelamin</th>
                        <th scope="col" class="text-center">Tanggal Lahir</th>
                        <th scope="col" class="text-center">Alamat</th>
                        <th scope="col" class="text-center">No HP</th>
                        @hasrole('Admin')
                        <th scope="col" class="text-center">Aksi</th>
                        @endhasrole
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($pasien as $item)
                            <tr>
                        <th scope="row" class="text-center"><a href="#">{{ $loop->iteration }}</a></th>
                        <td class="text-center">{{ $item->nama }}</td>
                        <td class="text-center">{{ $item->jenis_kelamin }}</td>
                        <td class="text-center">{{ $item->tanggal_lahir }}</td>
                        <td class="text-center">{{ $item->alamat }}</td>
                        <td class="text-center">{{ $item->no_hp }}</td>
                        @hasrole('Admin')
                        <td class="text-center">
                            <a href="{{ route('pasien.edit',$item->id) }}"><span class="btn btn-warning "><i class="fa fa-pencil-alt"></i></span></a>
                            <form class="d-inline" action="{{ route('pasien.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger border-0" >
<i class="fa fa-trash"></i>
                                    
                                </button>          
                               </form>
                        </td>
                        @endhasrole
                      </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>

@endsection
