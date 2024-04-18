@extends('admin.layout.layout')
@section('title')
    Contractors
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
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Contractors</h1>
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal"
                        data-target="#add-contractor">
                        Add New Contractor
                    </button>
                    @php
                    $arr = ['name', 'email', 'phone_number'];
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
                        <li class="breadcrumb-item active">Contractors</li>
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
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone Number</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contractors as $contractor)
                    <tr>
                        <td>{{ $contractor['name'] }}</td>
                        <td>{{ $contractor['email'] }}</td>
                        <td>{{ $contractor['phone_number'] }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="{{ '#contractor'.$contractor['id'] }}">
                                Edit
                            </button>
                            <a href="{{ route('admin.contractor.delete', $contractor['id']) }}" role="button" class="btn btn-danger btn-del">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Update Contractor Modal --}}
    @foreach ($contractors as $contractor)
    <div class="modal fade" id="{{ 'contractor'.$contractor['id'] }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Contractor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.contractor.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contractor['id'] }}" name="contractor_id">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name"
                                    value="{{ $contractor['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail" name="email"
                                    value="{{ $contractor['email'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPhoneNumber" name="phone_number"
                                    value="{{ $contractor['phone_number'] }}">
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
    {{-- Add Contractor Modal --}}
    <div class="modal fade" id="add-contractor">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Contractor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.contractor.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Email</label>
                                <input type="text" class="form-control" id="exampleInputName" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPhoneNumber" name="phone_number" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary">Add Contractor</button>
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