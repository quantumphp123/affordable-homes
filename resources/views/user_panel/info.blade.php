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
            <h1>Project Queries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Project Queries</li>
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
                <div class="row">
                    <div class="col-md-12 col-lg-12 table-responsive">
                        <table class="table table-striped table-responsive-sm display" id="example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Unit</th>
                                    <th>Usage</th>
                                    <th>Budget</th>
                                    <th>Meeting Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=1;?>
                                @foreach ($data as $item)    
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->usag }}</td>
                                    <td>{{ $item->budget }}</td>
                                    <td> {{ \Carbon\Carbon::parse($item->meeting_date)->diffForhumans() }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('user.showQuery',['id'=>$item->id]) }}">
                                            <button class="btn btn-primary">View</button>
                                        </a>
                                    </td>
                                    <?php $i++; ?>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
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
    $('#example').DataTable({

    });
});
</script>
@endsection
