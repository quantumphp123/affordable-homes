@extends('user_panel.layout.layout')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
  {{-- <link rel="stylesheet" href="{{url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href=""> --}}
  <link rel="stylesheet" href="{{url('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ url('public/blank-profile.webp') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ isset($data->first_name)? $data->first_name : '' }} {{isset($data->last_name)? $data->last_name : ''}} </h3>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" value="{{ isset($data->first_name)? $data->first_name : '' }}" class="form-control"  readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" value="{{ isset($data->last_name)? $data->last_name : '' }}" class="form-control"  readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="mobile">Mobile</label>
                        <input type="text" id="mobile" value="{{ isset($data->phone_number)? $data->phone_number : '' }}" class="form-control"  readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="{{ isset($data->email)? $data->email : '' }}" class="form-control" readonly>
                        {{-- <input type="email" id="email" value="{{$data->email }}" class="form-control" readonly> --}}
                    </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
