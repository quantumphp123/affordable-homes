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
                    <h1 class="m-0 text-dark">Projects</h1>
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal"
                        data-target="#add-project">
                        Add New Project
                    </button>
                    @php
                    $arr = ['image', 'name'];
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
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($projects as $project)
                    <div class="col">
                      <div class="card">
                        <img src="{{ asset('assets/img/portfolio/'.$project['image']) }}" class="card-img-top" alt="img">
                        <div class="card-body">
                          <h5 class="card-title"><span class="font-weight-bold">Project Tittle: </span>{{ $project['name'] }}</h5>
                          <br>
                          <button type="button" class="btn btn-primary mt-2" data-toggle="modal"
                                data-target="{{ '#project'.$project['id'] }}">
                                Edit
                            </button>
                          <a href="{{ route('admin.project.delete', $project['id']) }}" class="btn btn-danger btn-del mt-2">Delete</a>
                        </div>
                      </div>
                    </div>
                @endforeach
              </div>
        </div>
    </section>
    
    {{-- Update Service Modal --}}
    @foreach ($projects as $project)
    <div class="modal fade" id="{{ 'project'.$project['id'] }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Project</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.project.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $project['id'] }}" name="project_id">
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
                                <label for="exampleInputName">Project Tittle</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name"
                                    value="{{ $project['name'] }}">
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
    <div class="modal fade" id="add-project">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Project</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.project.add') }}" method="post" enctype="multipart/form-data">
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
                                <label for="exampleInputName">Project Title</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary">Add Project</button>
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