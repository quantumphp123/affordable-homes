@extends('admin.layout.layout')
@section('title')
    Edit {{ $data['property']['name'] }}
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
                        <h1 class="m-0 text-dark">{{ $data['property']['name'] }}</h1>
                        @php
                            $arr = ['name', 'description', 'price', 'length', 'width', 'level', 'bedroom', 'kitchen', 'images'];
                        @endphp
                        @foreach ($arr as $a)
                            @error($a)
                                <p class="text-danger mt-1 mb-0">{{ $message }}</p>
                            @enderror
                        @endforeach
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.view.properties') }}">Properties</a></li>
                            <li class="breadcrumb-item active">{{ $data['property']['name'] }}</li>
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
                            {{ $data['property']['name'] }}
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


                                    <a class="nav-link side-link" id="vert-tabs-health-tab" data-toggle="pill"
                                        href="#vert-tabs-health" role="tab" aria-controls="vert-tabs-health"
                                        aria-selected="false">Images</a>
                                    <a class="nav-link side-link" id="vert-tabs-records-tab" data-toggle="pill"
                                        href="#vert-tabs-records" role="tab" aria-controls="vert-tabs-records"
                                        aria-selected="false">Maps</a>

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
                                                            <a href="javascript:void()" data-toggle="modal"
                                                                data-target="#profile"><i class="fa fa-edit"></i></a>
                                                        </div>

                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Title/Name </label></p>
                                                                    <p>{{ $data['property']['name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Price(in USD Dollar) </label></p>
                                                                    <p>{{ '$' . number_format($data['property']['price']) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Size(in Sq.Foot) </label></p>
                                                                    <p>{{ $data['property']['length'] * $data['property']['width'].' Sq.Foot' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Length(in Foot) </label></p>
                                                                    <p>{{ $data['property']['length'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Width(in Foot) </label></p>
                                                                    <p>{{ $data['property']['width'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Levels </label></p>
                                                                    <p>{{ $data['property']['level'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Bedrooms </label></p>
                                                                    <p>{{ $data['property']['bedroom'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <p><label>Number of Kitchen </label></p>
                                                                    <p>{{ $data['property']['kitchen'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <p><label>Description </label></p>
                                                                    <p>{{ $data['property']['description'] }}</p>
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

                                    <div class="tab-pane fade" id="vert-tabs-health" role="tabpanel"
                                        aria-labelledby="vert-tabs-health-tab">


                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="card">

                                                            <div class="card-header">
                                                                <div class="card-tools" style="margin-right:2px;">
                                                                    <a href="javascript:void()" data-toggle="modal"
                                                                        data-target="#modal-add-image"> <button
                                                                            type="button"
                                                                            class="btn  bg-gradient-primary btn-position">Add
                                                                            Image</button></a>
                                                                </div>
                                                            </div>

                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Image</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data['images'] as $image)
                                                                            <tr>
                                                                                <td><img src="{{ url('assets/img/properties/' . $image['name']) }}"
                                                                                        style="height:100px;width:100px;">
                                                                                <td>

                                                                                    <a class="btn btn-danger btn-sm"
                                                                                        href="{{ route('admin.property.delete.image', $image['id']) }}">
                                                                                        <i class="fas fa-trash">
                                                                                        </i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <tfoot>

                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>

                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade" id="vert-tabs-records" role="tabpanel"
                                        aria-labelledby="vert-tabs-records-tab">



                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="card-header">
                                                                <div class="card-tools" style="margin-right:2px;">
                                                                    <a href="javascript:void()" data-toggle="modal"
                                                                        data-target="#add-skill"> <button type="button"
                                                                            class="btn  bg-gradient-primary btn-position">Add
                                                                            Maps </button></a>
                                                                </div>
                                                            </div>

                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <table id="example9"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Maps</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data['maps'] as $map)
                                                                            <tr>
                                                                                <td><img src="{{ url('assets/img/properties/' . $map['name']) }}"
                                                                                        style="height:100px;width:100px;">
                                                                                </td>
                                                                                <td>

                                                                                    <a class="btn btn-danger btn-sm"
                                                                                        href="{{ route('admin.property.delete.map', $map['id']) }}">
                                                                                        <i class="fas fa-trash">
                                                                                        </i>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <tfoot>

                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>

                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container-fluid -->
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

    <div class="modal fade" id="profile">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <!-- SELECT2 EXAMPLE -->
                    <form action="{{ route('admin.property.edit') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $data['property']['id'] }}" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleName">Title/Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleName"
                                        value="{{ $data['property']['name'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="examplePrice">Price(in USD Dollar)</label>
                                    <input type="number" class="form-control" name="price" id="examplePrice"
                                        value="{{ $data['property']['price'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleLength">Length(in Foot)</label>
                                    <input type="number" class="form-control" name="length" id="exampleLength"
                                        value="{{ $data['property']['length'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleWidth">Width(in Foot)</label>
                                    <input type="number" class="form-control" name="width" id="exampleWidth"
                                        value="{{ $data['property']['width'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleLevel">Number of Levels</label>
                                    <input type="text" class="form-control" name="level" id="exampleLevel"
                                        value="{{ $data['property']['level'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleBedroom">Number of Bedrooms</label>
                                    <input type="text" class="form-control" name="bedroom" id="exampleBedroom"
                                        value="{{ $data['property']['bedroom'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleKitchen">Number of Kitchens</label>
                                    <input type="text" class="form-control" name="kitchen" id="exampleKitchen"
                                        value="{{ $data['property']['kitchen'] }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleDesc">Description</label>
                                    <textarea id="exampleDesc" name="description" class="form-control" cols="30" rows="8">{{ $data['property']['description'] }}</textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- Add Image Modal --}}
    <div class="modal fade" id="modal-add-image">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <!-- SELECT2 EXAMPLE -->
                    <form action="{{ route('admin.property.add.image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $data['property']['id'] }}" name="id">
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Multiple Images of Property</label>
                                <input type="file" class="form-control" id="exampleInputPhoneNumber" name="images[]"
                                    multiple required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- Add Map Modal --}}
    <div class="modal fade" id="add-skill">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Map</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <!-- SELECT2 EXAMPLE -->
                    <form action="{{ route('admin.property.add.map') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $data['property']['id'] }}" name="id">
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Multiple Maps of Property</label>
                                <input type="file" class="form-control" id="exampleInputPhoneNumber" name="maps[]"
                                    multiple required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
