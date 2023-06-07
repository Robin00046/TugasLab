{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Tambah Data User</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Data User</li>
          <li class="breadcrumb-item active">Tambah Data User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
          </div>
          <div class="card-body">
                    <form method="POST" class="row g-3" action="{{ route('user.store') }}" >
                      @csrf
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Enter Nama" value="{{ old('name') }}">
                          <label for="name">Nama</label>
                          @error('name') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}" >
                          <label for="email">Email</label>
                          @error('email') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" >
                          <label for="password">Password</label>
                          @error('password') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                          <select class="form-select" name="role" id="role">
                            <option value="" selected>Pilih Role</option>
                            @foreach ($roles as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                          <label for="role">Role</label>
                          @error('role') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating">
                          
                          <button class="btn btn-primary">Save</button>
                          <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>

                        </div>
                      </div>

                  </form>
                  </table>

                </div>
                        </div>
                    </div>

                
@endsection
