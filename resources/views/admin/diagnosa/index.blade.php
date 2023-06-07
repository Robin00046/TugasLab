{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<main id="main" class="main">
  <div class="container-fluid">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Daftar Pemeriksaan</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Daftar Pemeriksaan</li>
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
              <h6 class="m-0 font-weight-bold text-primary">Data Pemeriksaan</h6>
          </div>
          <div class="card-body">
                    <a href="{{ route('diagnosa.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Pemeriksaan</a>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama Jenis</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Harga</th>
                        @hasrole('Admin')
                        <th scope="col" class="text-center">Aksi</th>
                        @endhasrole
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($diagnosa as $item)
                            <tr>
                        <th scope="row" class="text-center"><a href="#">{{ $loop->iteration }}</a></th>
                        <td class="text-center">{{ $item->nama_jenis }}</td>
                        <td class="text-center">{{ $item->nama }}</td>
                        <td class="text-center">Rp. {{ number_format($item->harga, 0)  }}</td>
                        @hasrole('Admin')
                        <td class="text-center">
                            <a href="{{ route('diagnosa.edit',$item->id) }}"><span class="btn btn-warning "><i class="fa fa-pencil-alt"></i></span></a>
                            <form class="d-inline" action="{{ route('diagnosa.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
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
