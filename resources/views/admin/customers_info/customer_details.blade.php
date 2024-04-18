@extends('admin.layout.layout')
@section('title')
    View Customer Details
@endsection
@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Customer Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.view.customers.info') }}">Customer Information</a></li>
                            <li class="breadcrumb-item active">Customer Details</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            Customer Details
                        </h3>
                    </div>
                    <div class="card-body">
                        <h4></h4>
                        <div class="row">
                            <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill"
                                        href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                      aria-selected="true">Details</a>
                            </div>
                            </div>
                            <div class="col-7 col-sm-9">
                                <div class="tab-content" id="vert-tabs-tabContent">

                                    <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                                        aria-labelledby="vert-tabs-home-tab">

                                        <section class="content">
                                            <div class="container-fluid">
                                                <!-- SELECT2 EXAMPLE -->
                                                <div class="card card-default ">
                                                    <div class="card-header headertop">
                                                        <h3 class="card-title">Details</h3>

                                                        <div class="card-tools">
                                                            {{-- <a href="javascript:void()" data-toggle="modal"
                                                                data-target="#profile"><i class="fa fa-edit"></i></a> --}}
                                                        </div>

                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Name </label></p>
                                                                    <p>{{ $info['user']['first_name'].' '.$info['user']['last_name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Contact </label></p>
                                                                    <p>{{ $info['user']['phone_number'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Email </label></p>
                                                                    <p>{{ $info['user']['email'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Meeting Date </label></p>
                                                                    <p>{{ date('d-M-Y', strtotime($info['created_at'])) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Meeting Time </label></p>
                                                                    <p>{{ date('h:i:s A', strtotime($info['created_at'])) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Raised On </label></p>
                                                                    <p>{{ date('d-M-Y', strtotime($info['created_at'])) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Unit </label></p>
                                                                    <p>{{ ucfirst($info['unit']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Usage </label></p>
                                                                    <p>{{ ucfirst($info['usag']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Budget </label></p>
                                                                    <p>{{ '$'.number_format($info['budget']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Financing Need </label></p>
                                                                    <p>{{ ucfirst($info['financing_need']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Goal </label></p>
                                                                    <p>{{ ucfirst($info['goal']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Bedroom </label></p>
                                                                    <p>{{ $info['bedroom'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Bathroom </label></p>
                                                                    <p>{{ ucfirst($info['bathroom']) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Bathrooms </label></p>
                                                                    <p>{{ $info['bathroom_number'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Status </label></p>
                                                                    <p @if ($info['status'] == 'pending')
                                                                    class="bg-warning"
                                                                    @else
                                                                        class="bg-success"
                                                                    @endif>{{ ucfirst($info['status']) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "ordering": false
            });
        });
    </script>
    <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
    <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
@endsection
