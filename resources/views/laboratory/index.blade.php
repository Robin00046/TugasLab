{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Daftar Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Daftar Laboratory</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Laboratory </h6>
          </div>
          <div class="card-body">                  
                    <a href="{{ route('laboratory.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Laboratory</a>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nomor Pendaftaran</th>
                        <th scope="col" class="text-center">Nama Pasien</th>
                        <th scope="col" class="text-center">Tes</th>
                        <th scope="col" class="text-center">Tanggal</th>
                        <th scope="col" class="text-center">Aksi</th>
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
                            
                            <td class="text-center">
                                <a href="{{ route('laboratory.edit',$item->id) }}"><span class="btn btn-warning "><i class="fa fa-pencil-alt"></i></span></a>
                                <form class="d-inline" action="{{ route('laboratory.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger border-0" >
                                    <i class="fa fa-trash"></i>
                                        
                                    </button>          
                                   </form>
                                   <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#nilai{{ $item->id }}">
                                    Input Hasil
                                </a>
                            </td>

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

    @foreach ($lab as $item)
        @php
            $id = $item->id
        @endphp
  <!-- Nilai Modal-->
<div class="modal fade" id="nilai{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Hasil</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <form  action="{{ route('hasil.update_hasil',$item->id) }}"
            method="post">
            @csrf
          @method('PUT')
          <div class="form-group">
              <label for="exampleFormControlInput1">Input Hasil</label>
              <input class="form-control" min="0" max="100" type="number" name="hasil" id="hasil">
              @error('hasil')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-primary">Save changes</button>
          </div> 
</form>
        </div>
    </div>
</div>
@endforeach

</div>
  </main><!-- End #main -->
@endsection
