{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Edit Data User</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">User</li>
          <li class="breadcrumb-item active">Edit Data User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
          </div>
          <div class="card-body">
                    <form method="POST" class="row g-3" action="{{ route('user.update',$user->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                            <label for="name">Nama</label>
                            @error('name') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
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
                              @foreach ($roles as $item)
                              <option {{ ($user->role_id == $item->id ? 'selected="selected"' : '') }} value="{{ $item->name }}">{{ $item->name }}</option>
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
