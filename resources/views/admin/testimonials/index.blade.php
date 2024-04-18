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
                    <h1 class="m-0 text-dark">Testimonials</h1>
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal"
                        data-target="#add-testinomial">
                        Add New Testimonial
                    </button>
                    @php
                    $arr = ['image', 'name', 'email', 'message'];
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
                        <li class="breadcrumb-item active">Testimonials</li>
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
                        <td>Email</td>
                        <td>Message</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>
                            <button type="button" class="btn mt-2" data-toggle="modal"
                                data-target="{{ '#image-preview'.$testimonial['id'] }}">
                                <img src="{{ url('assets/img/testimonials/'.$testimonial['image']) }}" alt="img"
                                width="65px" height="65px">
                            </button>
                        </td>
                        <td>{{ $testimonial['name'] }}</td>
                        <td>{{ $testimonial['email'] }}</td>
                        <td>{{ $testimonial['message'] }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="{{ '#testimonial'.$testimonial['id'] }}">
                                Edit
                            </button>
                            <a href="{{ route('admin.testimonial.delete', $testimonial['id']) }}" role="button"
                                class="btn btn-danger btn-del mt-1">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Update Testimonial Modal --}}
    @foreach ($testimonials as $testimonial)
    <div class="modal fade" id="{{ 'testimonial'.$testimonial['id'] }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Testimonial</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.testimonial.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $testimonial['id'] }}" name="testimonial_id">
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
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name"
                                    value="{{ $testimonial['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ $testimonial['email'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMessage">Message</label>
                                <textarea name="message" class="form-control" id="exampleInputMessage"
                                    rows="3">{{ $testimonial['message'] }}</textarea>
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
    {{-- Add Testimonial Modal --}}
    <div class="modal fade" id="add-testinomial">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Testimonial</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.testimonial.add') }}" method="post" enctype="multipart/form-data">
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
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMessage">Message</label>
                                <textarea name="message" class="form-control" id="exampleInputMessage"
                                    rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary">Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Testimonial Image Preview Modal --}}
    @foreach ($testimonials as $testimonial)
    <div class="modal fade" id="{{ 'image-preview'.$testimonial['id'] }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $testimonial['name'] }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="{{ url('assets/img/testimonials/'.$testimonial['image']) }}" alt="img" class="m-auto" width="500px" height="500px">
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
@endsection