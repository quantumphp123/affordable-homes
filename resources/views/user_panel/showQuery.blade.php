@extends('user_panel.layout.layout')

{{-- @section('css')

@endsection --}}

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Query</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Query</li>
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
                <div class="card-header">
                    <b>Meeting at: </b>{{ \Carbon\Carbon::parse($data->meeting_date)->diffForhumans() }}
                    @if($data->status == 'pending')
                    <span class="badge badge-warning float-right">Pending</span>
                    @else
                        <span class="badge badge-success float-right">Completed</span>
                    @endif
                </div>
              <div class="card-body box-profile">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><b>Unit:</b></div>
                            <div class="col-md-8">{{ $data->unit }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Budget:</b></div>
                            <div class="col-md-8">{{ $data->budget }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Goal:</b></div>
                            <div class="col-md-8">{{ $data->goal }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Bathroom Type:</b></div>
                            <div class="col-md-8">{{ $data->bathroom }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Number of Bathroom:</b></div>
                            <div class="col-md-8">{{ $data->bathroom_number }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><b>Usage:</b></div>
                            <div class="col-md-8">{{ $data->usag }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Financing Need?:</b></div>
                            <div class="col-md-8">{{ $data->financing_need }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Number of Bedroom:</b></div>
                            <div class="col-md-8">{{ $data->bedroom }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><b>Kitchen Type:</b></div>
                            <div class="col-md-8">{{ $data->kitchen }}</div>
                        </div>
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

{{-- @section('script')

@endsection --}}
