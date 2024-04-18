@extends('admin.layout.layout')



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

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="m-0 text-dark">Services</h1>

                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal"

                        data-target="#add-testinomial">

                        Add New Service

                    </button>

                    @php

                    $arr = ['image', 'name', 'description'];

                    @endphp

                    @foreach($arr as $a)

                    @error($a)

                    <p class="text-danger mt-1 mb-0">{{ $message }}</p>

                    @enderror

                    @endforeach

                </div><!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>

                        <li class="breadcrumb-item active">Services</li>

                    </ol>

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <section class="content">

        <div class="container-fluid">

            <table id="myTable">

                <thead>

                    <tr>

                        <td>Image</td>

                        <td>Name</td>

                        <td>Description</td>

                        <td>Actions</td>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($services as $service)

                    <tr>

                        <td>

                            <button type="button" class="btn mt-2" data-toggle="modal"

                                data-target="{{ '#image-preview'.$service['id'] }}">

                                <img src="{{ url('assets/img/services/'.$service['image']) }}" alt="img"

                                width="65px" height="65px">

                            </button>

                        </td>

                        <td>{{ $service['name'] }}</td>

                        <td>{{ $service['description'] }}</td>

                        <td>

                            <button type="button" class="btn btn-primary" data-toggle="modal"

                                data-target="{{ '#service'.$service['id'] }}">

                                Edit

                            </button>

                            <a href="{{ route('admin.service.delete', $service['id']) }}" role="button" class="btn btn-danger btn-del mt-1">Delete</a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </section>

    {{-- Update Service Modal --}}

    @foreach ($services as $service)

    <div class="modal fade" id="{{ 'service'.$service['id'] }}">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">Update Service</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form action="{{ route('admin.service.edit') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" value="{{ $service['id'] }}" name="service_id">

                    <div class="modal-body">

                        <div class="card-body">

                            <div class="form-group">

                                <label for="exampleInputFile">Image</label>

                                <div class="input-group">

                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">

                                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="exampleInputName">Service Name</label>

                                <input type="text" class="form-control" id="exampleInputName" name="name"

                                    value="{{ $service['name'] }}">

                            </div>

                            <div class="form-group">

                                <label for="exampleInputMessage">Description</label>

                                <textarea name="description" class="form-control" id="exampleInputMessage"

                                    rows="3">{{ $service['description'] }}</textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer justify-content-end">

                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    @endforeach

    {{-- Add Service Modal --}}

    <div class="modal fade" id="add-testinomial">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">Add New Service</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form action="{{ route('admin.service.add') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="card-body">

                            <div class="form-group">

                                <label for="exampleInputFile">Image</label>

                                <div class="input-group">

                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>

                                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="exampleInputName">Service Name</label>

                                <input type="text" class="form-control" id="exampleInputName" name="name" required>

                            </div>

                            <div class="form-group">

                                <label for="exampleInputMessage">Description</label>

                                <textarea name="description" class="form-control" id="exampleInputMessage"

                                    rows="3" required></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer justify-content-end">

                        <button type="submit" class="btn btn-primary">Add Service</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    {{-- Service Image Preview Modal --}}

    @foreach ($services as $service)

    <div class="modal fade" id="{{ 'image-preview'.$service['id'] }}">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">{{ $service['name'] }}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <img src="{{ url('assets/img/services/'.$service['image']) }}" alt="img" class="m-auto" width="500px" height="500px">

            </div>

        </div>

    </div>

    @endforeach

</div>

@endsection



@section('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">

</script>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready( function () {

            $('#myTable').DataTable();

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