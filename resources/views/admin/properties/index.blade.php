@extends('admin.layout.layout')
@section('title')
    Properties
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
                        <h1 class="m-0 text-dark">Properties</h1>
                        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#add-property">
                            Add New property
                        </button>
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
                            <li class="breadcrumb-item active">Properties</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <table id="myTable" class="row-border">
                    <thead>
                        <tr>
                            <td>Title/Name</td>
                            <td>Price</td>
                            <td>Size(in Foot)</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                            <tr>
                                <td>{{ $property['name'] }}</td>
                                <td>{{ '$'.number_format($property['price']) }}</td>
                                <td>{{ $property['length']*$property['width'].' Sq.Foot' }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{ route('admin.view.edit.property', [str_replace(' ', '-', $property['name']), $property['id']]) }}">
                                        View/Edit
                                    </a>
                                    <a href="{{ url('admin/properties/delete/all/'.$property['id']) }}"
                                        class="btn btn-danger btn-del">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        {{-- Add property Modal --}}
        <div class="modal fade" id="add-property">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Property</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.property.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Property Name/Title</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="name" value="{{ old('name') }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Property Description</label>
                                    <textarea name="description" class="form-control" rows="12" required>{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Property Price(in USD Dollar)</label>
                                    <input type="price" class="form-control" id="exampleInputPhoneNumber"
                                        name="price" value="{{ old('price') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Property Length(in Foot)</label>
                                    <input type="text" class="form-control" id="exampleInputPhoneNumber"
                                        name="length" value="{{ old('length') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Property Width(in Foot)</label>
                                    <input type="text" class="form-control" id="exampleInputPhoneNumber"
                                        name="width" value="{{ old('width') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Number of Levels in Property</label>
                                    <div class="d-flex justify-content-between w-50">
                                        <div>
                                            <input type="radio" name="level" class="mx-2" value="1" required>1
                                        </div>
                                        <div>
                                            <input type="radio" name="level" class="mx-2" value="2" required>2
                                        </div>
                                        <div>
                                            <input type="radio" name="level" class="mx-2" value="3" required>3
                                        </div>
                                        <div>
                                            <input type="radio" name="level" class="mx-2" value="4" required>4
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Number of Bedrooms in Property</label>
                                    <div class="d-flex justify-content-between w-50">
                                        <div>
                                            <input type="radio" name="bedroom" class="mx-2" value="1" required>1
                                        </div>
                                        <div>
                                            <input type="radio" name="bedroom" class="mx-2" value="2" required>2
                                        </div>
                                        <div>
                                            <input type="radio" name="bedroom" class="mx-2" value="3" required>3
                                        </div>
                                        <div>
                                            <input type="radio" name="bedroom" class="mx-2" value="4" required>4
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Number of Kitchens in Property</label>
                                    <input type="text" class="form-control" id="exampleInputPhoneNumber"
                                        name="kitchen" value="{{ old('kitchen') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Multiple Images of Property</label>
                                    <input type="file" class="form-control" id="exampleInputPhoneNumber"
                                        name="images[]" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoneNumber">Map of Property(if any)</label>
                                    <input type="file" class="form-control" id="exampleInputPhoneNumber"
                                        name="maps[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="submit" class="btn btn-primary">Add property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(".dataTables_filter").hide()
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
