{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Tambah Data Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Data Laboratory</li>
          <li class="breadcrumb-item active">Tambah Data Laboratory</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


      

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Laboratory</h6>
          </div>
          <div class="card-body">
                    <form method="POST" class="row g-2" action="{{ route('laboratory.store') }}" >
                      @csrf
                      <div class="col-md-12 mb-2">
                        <div class="form-floating">
                          <label for="no_lab">No Registrasi</label>
                          <input type="text" class="form-control" name="no_lab" id="no_lab" value="{{ $value }}" readonly>
                          @error('no_lab') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-12 mb-2">
                        <div class="form-floating">
                          <label for="pasien_id">Pasien</label>
                          <select class="form-control" name="pasien_id" id="pasien_id">
                            <option value="" selected>Pilih Pasien</option>
                            @foreach ($pasien as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                          </select>
                          @error('password') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input type="text" class="form-control" id="jenis_kelamin" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <label for="tanggal_lahir">Tanggal Lahir</label>
                          <input type="text" class="form-control" id="tanggal_lahir" readonly>
                        </div>
                      </div>
                      <div class="col-md-6 mt-2">
                        <div class="form-floating">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control" id="alamat" readonly>
                        </div>
                      </div>
                      <div class="col-md-6 mt-2">
                        <div class="form-floating">
                          <label for="no_hp">No Handphone</label>
                          <input type="text" class="form-control" id="no_hp" readonly>
                        </div>
                      </div>
                      <div class="col-md-12 mb-2 mt-2">
                        <div class="form-floating">
                          <label for="option">Tes</label>
                          <select class="form-control" name="" id="option">
                            <option value="" selected>Pilih Tes</option>
                            @foreach ($jenis as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                          </select>
                        </div>
                        {{-- @error('') 
                        <span class="text-danger error">{{ $message }}</span>@enderror --}}
                      </div>
                      <div class="col-md-12 mb-2">
                        <div class="form-floating">
                          <label for="diagnosa">Diagnosa</label>
                          <select class="form-control" name="diagnosa_id" id="diagnosa" required>
                            <option value="">Select Plan</option>
                          </select>
                        </div>
                    </div>
                      <div class="col-md-12 mb-2">
                        <div class="form-floating">
                          <label for="tanggal">Tanggal</label>
                          <input type="date" name="tanggal" id="tanggal" class="form-control" 
                          placeholder="Enter tanggal" >
                          @error('tanggal') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      
                      <div class="col-md-12 mt-2">
                          <button class="btn btn-primary">Save</button>
                          <a href="{{ route('laboratory.index') }}" class="btn btn-primary">Kembali</a>

                      </div>

                  </form>
                  </table>
                </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
          </div>
        </div><!-- End Left side columns -->


      {{-- </div> --}}
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

      $(document).ready(function(){
  
          $("#option").change(function(){
  
              var diagnosaID = $(this).val();
              if(diagnosaID == ""){
                  $("#Diagnosa").html("<option value=''>Select Plan</option>");
              }
  
              $.ajax({
                  url:"/getdiagnosa/"+diagnosaID,
                  type:"GET",
                  success:function(data){
                      var diagnosa = data.diagnosa;
                      var html = "<option value=''>Select Plan</option>";
                      for(let i =0;i<diagnosa.length;i++){
                          html += `
                          <option value="`+diagnosa[i]['id']+`">`+diagnosa[i]['nama']+`</option>
                          `;
                      }
                      $("#diagnosa").html(html);
                  }
              });
  
          });
  
      });
  
  </script>
  <script>

    $(document).ready(function(){

        $("#pasien_id").click(function(){

            var pasien = $(this).val();
            
            console.log(pasien);

            $.ajax({
                url:"/getpasien/"+pasien,
                type:"GET",
                success:function(data){
                    var pasien = data.pasien;
                    // $('#nama').val(pasien['nama']);
                    $('#jenis_kelamin').val(pasien['jenis_kelamin']);
                    $('#tanggal_lahir').val(pasien['tanggal_lahir']);
                    $('#alamat').val(pasien['alamat']);
                    $('#no_hp').val(pasien['no_hp']);
                }
            });

        });

    });

</script>
  </main><!-- End #main -->
@endsection
