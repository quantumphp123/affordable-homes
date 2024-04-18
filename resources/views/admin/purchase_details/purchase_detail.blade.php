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
                        <h1 class="m-0 text-dark">Purchase Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.view.purchase.details') }}">Purchase Details</a></li>
                            <li class="breadcrumb-item active">Purchase Detail</li>
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
                            Purchase Detail
                        </h3>
                    </div>
                    <div class="card-body">
                        <h4></h4>
                        <div class="row">
                            <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill"
                                        href="#vert-tabs-tabContent" role="tab" aria-controls="vert-tabs-home"
                                      aria-selected="true">Purchase Detail</a>
                                    <a class="nav-link side-link" id="vert-tabs-customer-tab" data-toggle="pill"
                                        href="#vert-tabs-customer" role="tab" aria-controls="vert-tabs-customer"
                                      aria-selected="true">Customer Detail</a>
                                    <a class="nav-link side-link" id="vert-tabs-property-tab" data-toggle="pill"
                                        href="#vert-tabs-property" role="tab" aria-controls="vert-tabs-property"
                                      aria-selected="true">For Property</a>
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
                                                        <h3 class="card-title">Purchase Detail</h3>

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
                                                                    <p><label>Number of Windows </label></p>
                                                                    <p>{{ $purchase_detail->windows }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Doors </label></p>
                                                                    <p>{{ $purchase_detail->doors }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Hatch/Skylight Roof </label></p>
                                                                    <p>{{ $purchase_detail->hatch_skylight_roof }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Toilet </label></p>
                                                                    <p>{{ $purchase_detail->toilet }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Tub </label></p>
                                                                    <p>{{ $purchase_detail->tub }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Addresss </label></p>
                                                                    <p>{{ $purchase_detail->address }}</p>
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

                                    <div class="tab-pane text-left fade show" id="vert-tabs-customer" role="tabpanel"
                                        aria-labelledby="vert-tabs-customer-tab">

                                        <section class="content">
                                            <div class="container-fluid">
                                                <!-- SELECT2 EXAMPLE -->
                                                <div class="card card-default ">
                                                    <div class="card-header headertop">
                                                        <h3 class="card-title">Customer Detail</h3>

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
                                                                    <p><label>First Name </label></p>
                                                                    <p>{{ $purchase_detail->user['first_name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Last Name </label></p>
                                                                    <p>{{ $purchase_detail->user['last_name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Contact </label></p>
                                                                    <p>{{ $purchase_detail->user['phone_number'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Email </label></p>
                                                                    <p>{{ $purchase_detail->user['email'] }}</p>
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
                                    <div class="tab-pane text-left fade show" id="vert-tabs-property" role="tabpanel"
                                        aria-labelledby="vert-tabs-property-tab">

                                        <section class="content">
                                            <div class="container-fluid">
                                                <!-- SELECT2 EXAMPLE -->
                                                <div class="card card-default ">
                                                    <div class="card-header headertop">
                                                        <h3 class="card-title">For Property</h3>

                                                        <div class="card-tools">
                                                            {{-- <a href="javascript:void()" data-toggle="modal"
                                                                data-target="#profile"><i class="fa fa-edit"></i></a> --}}
                                                        </div>

                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <p><label>Property Name </label></p>
                                                                    <p>{{ $purchase_detail->property['name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <p><label>Price </label></p>
                                                                    <p>{{ $purchase_detail->property['price'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <p><label>Description </label></p>
                                                                    <p>{{ $purchase_detail->property['description'] }}</p>
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
